<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Get form fields
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $location = $_POST['location'] ?? '';
    $message = $_POST['message'] ?? '';

    // Email sending
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = 'madanallakula1@gmail.com';
        $mail->Password = 'zkle fgmd udge ifim'; // Use Gmail App Password

        $mail->setFrom('madanallakula1@gmail.com', 'Livsatva Website');
        $mail->addAddress('madanallakula1@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'New Lead Received from Top Livsatva';
        $mail->Body = "
            <b>Name:</b> $name <br>
            <b>Email:</b> $email <br>
            <b>Phone:</b> $phone <br>
            <b>Location:</b> $location <br>
            <b>Message:</b> $message
        ";

        $mail->send();

        // Redirect to thank-you page
        header('Location: thank-you.php');
        exit;
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Invalid request.';
}
