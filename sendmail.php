<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "ahteshamdev434@gmail.com";  
    $subject = "New Form Submission from Website";
    
    $name = $_POST["name"] ?? 'Not provided';
    $email = $_POST["email"] ?? 'Not provided';
    $message = $_POST["message"] ?? 'Not provided';

    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: noreply@yourdomain.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry, something went wrong.";
    }
}
?>