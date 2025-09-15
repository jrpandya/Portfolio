<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Your receiving email
    $to = "jaypandya806@gmail.com";  // Replace with your own Gmail

    // Email subject & body
    $subject = "New Contact Form Message from $name";
    $body = "You have received a new message from your portfolio contact form.\n\n".
            "Name: $name\n".
            "Email: $email\n\n".
            "Message:\n$message";

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Try to send
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('✅ Your message has been sent successfully!'); window.history.back();</script>";
    } else {
        echo "<script>alert('❌ Sorry, your message could not be sent. Please try again later.'); window.history.back();</script>";
    }
} else {
    echo "Invalid request.";
}
?>
