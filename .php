<?php
$to = "akhack9th@gmail.com"; // recipient email address
$subject = "Test Email"; // email subject
$message = "This is a test email!"; // email message

// Sender information
$sender_name = "Ashutosh"; // sender's name
$sender_email = "ashutoshhacker9@gmail.com"; // sender's email address

// Email headers
$headers = "From: $sender_name <$sender_email>\r\n";
$headers .= "Reply-To: $sender_email\r\n";
$headers .= "Return-Path: $sender_email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email. Please try again later.";
}
?>
