<?php
include 'common/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = trim($_POST['name'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $number   = trim($_POST['number'] ?? '');
    $services = trim($_POST['services'] ?? '');
    $message  = trim($_POST['message'] ?? ($_POST['requirement'] ?? ''));

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
        $redirect = trim($_POST['redirect_to'] ?? 'thank-you.php');
        if (strpos($redirect, 'http') === 0 || strpos($redirect, '//') === 0) {
            $redirect = 'thank-you.php';
        }

        // Append form data as query parameters so they can be forwarded to WhatsApp
        $query_params = [
            'name' => $name,
            'email' => $email,
            'phone' => $number,
            'service' => $services,
            'msg' => $message
        ];

        $separator = (strpos($redirect, '?') === false) ? '?' : '&';
        $redirect .= $separator . http_build_query($query_params);

        header("Location: " . $base_url . ltrim($redirect, '/'));
        exit;
    } else {
    echo "<script>
        alert('Sorry! Message Not Send, Please Try Again Later.');
        window.history.back();
    </script>";
}

}
?>