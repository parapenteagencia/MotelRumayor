<?php

$name = $_POST["name"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$message = $_POST["message"];

$body = "";
$body .= "Nombre: ";
$body .= $name;
$body .= "<br>";
$body .= "Teléfono: ";
$body .= $tel;
$body .= "<br>";
$body .= "E-mail: ";
$body .= $email;
$body .= "<br>";
$body .= "Mensaje: ";
$body .= $message;
$body .= "<br>";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings GoDaddy
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'localhost';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = false;                                   // Enable SMTP authentication
    $mail->SMTPAutoTLS = false;
    $mail->Port       = 25;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('contacto@motelrumayor.com', $name);
    $mail->addAddress('contacto@motelrumayor.com');     // Para Rumayor
    $mail->addCC('carlos@parapenteagencia.com');     // Para mi Carlos
    $mail->addCC('pau@parapenteagencia.com');     // Para mi Carlos
    $mail->addBCC('luis@parapenteagencia.com');     // Para mi correo

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Motel Rumayor - Contacto';
    $mail->Body    = $body;
    $mail->CharSet = 'UTF-8';
    $mail->send();
    echo 'success'  ;
} catch (Exception $e) {
    echo "El mensaje no se pudo enviar. Mailer Error: {$mail->ErrorInfo}";
}