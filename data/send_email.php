<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $mail = new PHPMailer(true);

    try {
     
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'maillerphp62@gmail.com'; 
        $mail->Password   = 'zgwnnlgzpltcfabd';       
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        
        $mail->setFrom('maillerphp62@gmail.com', 'Formulario Portafolio');
        $mail->addAddress('c.carpincho.gaucho@gmail.com', 'Carpincho Gaucho'); 

        
        $mail->isHTML(false);
        $mail->Subject = 'Nueva solicitud de comisión';
        $mail->Body    = "Nombre: $nombre\n\nMensaje:\n$mensaje";

        $mail->send();
        echo 'Mensaje enviado con éxito';
    } catch (Exception $e) {
        echo "No se pudo enviar el mensaje. Error: {$mail->ErrorInfo}";
    }
}
?>
