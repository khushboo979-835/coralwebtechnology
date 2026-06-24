<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = trim($_POST['name'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $number   = trim($_POST['number'] ?? '');
    $services = trim($_POST['services'] ?? '');
    $message  = trim($_POST['message'] ?? '');

    // Receiver email
    $to = "coralwebtechnology@gmail.com"; 

    $subject = "New Contact Form Enquiry";

    $body = "
    New enquiry received:

    Name: $name
    Email: $email
    Number: $number
    Looking For: $services

    Message:
    $message
    ";

    $headers = "From: Website Enquiry <no-reply@" . $_SERVER['HTTP_HOST'] . ">\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: thank-you.php");
        exit;
    } else {
    echo "<script>
        alert('Sorry! Message Not Send, Please Try Again Later.');
        window.history.back();
    </script>";
}

}
?>