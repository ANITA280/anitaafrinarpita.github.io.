<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "anita.afrinn@gmail.com";

    // Set the subject of the email
    $subject = "New Contact Form Submission";

    // Build the email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message\n";

    // Send the email
    if (mail($to, $subject, $body)) {
        // Email sent successfully, redirect back to the same page
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit();
    } else {
        echo "Error sending the email. Please try again later.";
    }
}
?>
