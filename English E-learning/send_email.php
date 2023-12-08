<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Recipient email address
    $to = "undiedperson@gmail.com"; // Change this to your email address

    // Email subject
    $subject = "New Contact Form Submission";

    // Email content
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully. We will get back to you soon.');</script>";
        echo "<script>window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('Failed to send the message. Please try again later.');</script>";
        echo "<script>window.location.href='contact.html';</script>";
    }
}
?>
