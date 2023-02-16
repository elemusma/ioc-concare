<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
// require 'vendor/autoload.php';
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    <br>//Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
    $mail->isSMTP(); // Send using SMTP
    $mail->Host = 'send.smtp.com'; // Set your SMTP.com server to send through
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'info@insideoutfocus.com'; // Your SMTP.com Sender Login
    $mail->Password = '-_WK.V7LgYG6qi'; // Your SMTP.com Sender Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port = 465; // you may also use 25, 2082 or use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    // Recipients
    $mail->setFrom('info@concare.com', 'Concare');
    $mail->addAddress('info@concare.com', 'info@concare.com'); // Add a recipient
    $mail->addAddress('info@concare.com'); // Name is optional
    $mail->addReplyTo('info@concare.com', 'Concare');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment('/path/to/doc.pdf'); // Add attachments
    $mail->addAttachment('path/to/picture.jpg', 'logo.jpg'); // Optional name

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Website Applicant: Sales Specialist from ' . $firstName;
    $mail->Body = $body; 
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// XSRF token into form