<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Recipient email
    $to = 'b1d2f7@gmail.com';
    $subject = 'New Contact Form Submission';
    $headers = "From: $email";

    // Email content
    $emailBody = "Name: $name\n";
    $emailBody .= "Email: $email\n";
    $emailBody .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $emailBody, $headers)) {
        echo 'Thank you for your message!';
    } else {
        echo 'Sorry, something went wrong. Please try again later.';
    }
}
?>
