<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

require 'vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$errorLogPath = __DIR__ . '/error.log';

// Function to send auto response email
function sendAutoResponseEmail($userEmail)
{
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USERNAME'];
        $mail->Password   = $_ENV['SMTP_PASSWORD'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = $_ENV['SMTP_PORT'];

        // Recipients
        $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']);
        $mail->addAddress($userEmail);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Thank you for submitting the form';
        $mail->Body    = 'Thank you for submitting the form. We will get back to you soon.';

        $mail->send();
        return true;
    } catch (Exception $e) {
        $errorMessage = "[" . date("Y-m-d H:i:s") . "] AutoResponseEmail Error: {$mail->ErrorInfo}" . PHP_EOL;
        error_log($errorMessage, 3, $GLOBALS['errorLogPath']); // 3 means to append to the file
        return false;
    }
}



// Function to send admin email
// Function to send admin email
function sendAdminEmail($formData)
{
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USERNAME'];
        $mail->Password   = $_ENV['SMTP_PASSWORD'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = $_ENV['SMTP_PORT'];

        // Recipients
        $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']);
        $adminEmails = explode(',', $_ENV['ADMIN_EMAILS']);
        foreach ($adminEmails as $adminEmail) {
            $mail->addAddress(trim($adminEmail));
        }

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'New Form Submission';

        // Include the HTML template
        ob_start();
        include('admin_email_template.php');
        $mailBody = ob_get_clean();

        // Assign variables to the template
        $dateAndTime = date("Y-m-d H:i:s");
        $name = htmlspecialchars($formData['first_name'] . ' ' . $formData['last_name']);
        $email = htmlspecialchars($formData['email']);
        $telephone = htmlspecialchars($formData['telephone']);
        $message = nl2br(htmlspecialchars($formData['message']));
        $termsAccepted = $formData['terms'] ? 'Yes' : 'No';

        // Replace placeholders in the template with actual values
        $mailBody = str_replace(['{dateAndTime}', '{name}', '{email}', '{telephone}', '{message}', '{termsAccepted}'], [$dateAndTime, $name, $email, $telephone, $message, $termsAccepted], $mailBody);

        $mail->Body = $mailBody;

        $mail->send();
        return true;
    } catch (Exception $e) {
        $errorMessage = "[" . date("Y-m-d H:i:s") . "] AdminEmail Error: {$mail->ErrorInfo}" . PHP_EOL;
        error_log($errorMessage, 3, $GLOBALS['errorLogPath']);
        return false;
    }
}

// Process form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];
    $terms = isset($_POST['terms']);

    // validation logic
    if (empty($firstName) || empty($lastName) || empty($email) || empty($message) || !$terms) {
        echo json_encode(['success' => false, 'message' => 'Validation failed. Please fill in all required fields.']);
        exit;
    }

    // Save form data to a JSON file
    $formData = [
        'first_name' => $firstName,
        'last_name' => $lastName,
        'email' => $email,
        'telephone' => $telephone,
        'message' => $message,
        'terms' => $terms,
        'date' => date("Y-m-d H:i:s")
    ];

    $jsonFile = 'form_submissions.json';
    $existingData = file_exists($jsonFile) ? json_decode(file_get_contents($jsonFile), true) : [];
    $existingData[] = $formData;

    file_put_contents($jsonFile, json_encode($existingData, JSON_PRETTY_PRINT));

    // Send auto-response email to the user
    $autoResponseSent = sendAutoResponseEmail($email);

    // Send admin email with form details
    $adminEmailSent = sendAdminEmail($formData);

    if ($autoResponseSent && $adminEmailSent) {
        echo "<script>alert('Form submitted successfully.'); window.location.href = 'index.php';</script>";
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to send emails.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
