<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'jd.the.cyber.criminal@gmail.com';
    $subject = 'Contact Us Request';
    $body = "Name: $name\nEmail: $email\n\n$message";
    
    if (mail($to, $subject, $body)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Oops! Something went wrong.';
    }
}
?>
