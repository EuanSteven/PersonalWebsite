<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "23006327@uhi.ac.uk";

$subject = "Website Message";
$body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $body, $headers)) {
    header("Location: /pages/contact/thankyou.html");
    exit;
} else {
    echo "There was an error sending your message. Please try again later.";
}
?>