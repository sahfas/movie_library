<!-- admin_email_template.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Form Submission</title>
</head>

<body>
    <h2>New Form Submission</h2>

    <p><strong>Date and Time:</strong> {dateAndTime}</p>

    <h3>Contact Information</h3>
    <ul>
        <li><strong>Name:</strong> {name}</li>
        <li><strong>Email:</strong> {email}</li>
        <li><strong>Telephone:</strong> {telephone}</li>
    </ul>

    <h3>Message</h3>
    <p>{message}</p>

    <h3>Additional Information</h3>
    <ul>
        <li><strong>Terms Accepted:</strong> {termsAccepted}</li>
    </ul>

    <p>Thank you for your attention.</p>
</body>

</html>
