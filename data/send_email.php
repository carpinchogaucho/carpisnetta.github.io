<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'maillerphp62@gmail.com'; 
        $mail->Password   = 'zgwnnlgzpltcfabd';        
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;


        $mail->setFrom('maillerphp62@gmail.com', 'Formulario Portafolio');

       
        $mail->addAddress('c.carpincho.gaucho@gmail.com', 'Carpincho Gaucho');

        $mail->isHTML(false);
        $mail->Subject = 'Nueva solicitud de comisión desde el formulario';
        $mail->Body    = "Nombre: $nombre\n\nMensaje:\n$mensaje";

        $mail->send();
        echo "Mensaje enviado con éxito";
    } catch (Exception $e) {
        echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
    }
}
?>