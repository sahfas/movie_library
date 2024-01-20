# Movie Library App

## Introduction

Welcome to the Movie Library App! This application allows you to manage and explore your movie collection effortlessly. It comes with a range of features to enhance your movie-viewing experience.

## Instructions

To set up the project on your local machine, follow these steps:

1. Install XAMPP.
2. Start the XAMPP Apache server.
3. Clone the repository into the htdocs folder using the following command:
   ```
   git clone https://github.com/sahfas/movie_library.git
   ```
4. Run `composer install` to install dependencies.
5. Create a `.env` file in the project folder with the following information:

   ```env
   SMTP_HOST=smtp.gmail.com
   SMTP_PORT=587
   SMTP_USERNAME={{your_gmail}}
   SMTP_PASSWORD={{your_gmail_app_password}}
   ADMIN_EMAILS={{give admin emails eg:shahfas177@gmail.com,1sahfas@gmail.com}}
   MAIL_FROM_ADDRESS={{your_gmail}}
   MAIL_FROM_NAME={{Give a name for the sender eg:MovieLibrary}}
   ```

   Example `.env` file:

   ```env
   SMTP_HOST=smtp.gmail.com
   SMTP_PORT=587
   SMTP_USERNAME=1sahfas@gmail.com
   SMTP_PASSWORD=khlahcrtishnmkmw
   ADMIN_EMAILS=dumidu.kodithuwakku@ebeyonds.com,prabhath.senadheera@ebeyonds.com
   MAIL_FROM_ADDRESS=1sahfas@gmail.com
   MAIL_FROM_NAME=MovieLibrary
   ```

6. Access the following address in your web browser:
   [http://127.0.0.1/movie_library/index.php](http://127.0.0.1/movie_library/index.php)

7. Test the functionalities of the application.

If you encounter any issues during the configuration process, feel free to contact us at [1sahfas@gmail.com](mailto:1sahfas@gmail.com).

## Features

- **Responsive Design:**
  The application is designed to be responsive, ensuring a seamless user experience across various devices and screen sizes.

- **Navbar with Toggle:**
  The navigation bar includes a toggle feature for small screens, allowing users to access the menu conveniently.

- **Dynamic Menu:**
  The menu dynamically opens and closes based on user interaction, providing an intuitive navigation experience.

- **Active Link Styling:**
  Active links in the navigation bar are visually highlighted, making it easy for users to identify the current page.

- **Contact Form:**
  The application includes a contact form with client-side validation, ensuring that users provide essential information before submission.

- **Enhanced Validation:**
  Validation for the contact form includes checks for valid email format, a minimum message length of 30 words, and a valid 10-digit phone number.

- **XAMPP Integration:**
  The app is integrated with XAMPP for a local development environment, simplifying setup for users.

- **SMTP Email Configuration:**
  Users can configure SMTP email settings in the `.env` file to enable functionalities like password recovery or email notifications.

- **Administrator Email Alerts:**
  The application sends email alerts to specified admin emails, keeping administrators informed of important events or issues.

- **User-Friendly README:**
  The README provides clear instructions for setting up the project locally, configuring email settings, and testing the application's functionalities.

## Conclusion

Thank you for choosing the Movie Library App! We hope you enjoy managing your movie collection with our application. If you have any feedback or suggestions, feel free to reach out to us.
