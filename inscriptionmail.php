<?php
    // Only process POST requests.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $team_name = strip_tags(trim($_POST["team_name"]));
        $owner = strip_tags(trim($_POST["owner"]));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = trim($_POST["phone"]);
        $players_to_enroll = trim($_POST["players_to_enroll"]);

        // Check that data was sent to the mailer.
        if (empty($team_name) || empty($owner) || empty($email) || empty($phone) || empty($players_to_enroll) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
$recipient = "smokymountaincup@yahoo.com";

        // Set the email subject.
        $subject = "New enrollment from $team_name";

        // Build the email content.
        $email_content = "Team Name: $team_name\n";
        $email_content .= "Owner: $owner\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Phone: $phone\n";
        $email_content .= "Players to Enroll:\n$players_to_enroll\n";

        // Build the email headers.
        $email_headers = "From: $team_name <$email>";

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
