<?php
    // Only process POST requests.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = trim($_POST["phone"]);
        $product = trim($_POST["product"]);

        // Check that data was sent to the mailer.
        if (empty($name) || empty($email) || empty($phone) || empty($product) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "smokymountaincup@yahoo.com";

        // Set the email subject.
        $subject = "New inquiry about $product from $name";

        // Build the email content.
        $email_content = "Name: $name\n";   
        $email_content .= "Email: $email\n\n";  
        $email_content .= "Phone: $phone\n\n";
        $email_content .= "Product of Interest: $product\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
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
