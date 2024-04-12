<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $to = $_POST['to']; // recipient email address
    $subject = $_POST['subject']; // email subject
    $message = $_POST['message']; // email message

    // Set the sender's name and email address
    $sender_name = "Your Name"; // sender's name
    $sender_email = "sender@example.com"; // sender's email address

    // Set headers to indicate HTML content and specify the sender
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $sender_name <$sender_email>" . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
}
?>
