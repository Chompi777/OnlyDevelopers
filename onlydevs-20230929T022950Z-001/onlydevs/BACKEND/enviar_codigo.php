<?php
// Reemplaza estos valores con los tuyos
$correoUsuario = $_POST['email'];
$codigo = 123;

// Cargar la biblioteca PHPMailer
require 'phpmailer/PHPMailerAutoload.php';

// Configurar PHPMailer
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'germanfeo777@gmail.com';
$mail->Password = 'queso2019';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Configurar el remitente y el destinatario
$mail->setFrom('germanfeo777@gmail.com', 'OnlyDevs');
$mail->addAddress($correoUsuario);

// Configurar el contenido del correo
$mail->Subject = 'Código de Verificación';
$mail->Body = 'Tu código de verificación es: ' . $codigo;

// Enviar el correo electrónico
if ($mail->send()) {
    // Correo enviado exitosamente
    echo 'Se ha enviado un código de verificación a tu correo electrónico.';
} else {
    // Error al enviar el correo
    echo 'Error al enviar el código de verificación.';
}
?>
