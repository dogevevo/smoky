<?php
    // Only process POST requests.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields.
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        // Check if all fields are filled.
        if (empty($name) || empty($email) || empty($message)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }

        // Sanitize input.
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $message = filter_var($message, FILTER_SANITIZE_STRING);

        // Validate email.
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Invalid email format.";
            exit;
        }

        // Set the recipient email address.
        $recipient = "smokymountaincup@yahoo.com";

        // Set the email subject.
        $subject = "New contact from $name";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (OK) response code.
            http_response_code(200);
            header("Location: thank-you.php");
            exit;
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            header("Location: sorry.php");
            exit;
        }
    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        header("Location: sorry.php");
        exit;
    }
?>
