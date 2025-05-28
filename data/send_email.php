<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
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

       
        $mail->setFrom($correo, $nombre);                            
        $mail->addAddress('maillerphp62@gmail.com', 'Mi Portafolio');  

       
        $mail->isHTML(false);                                       
        $mail->Subject = 'Nuevo mensaje desde el formulario de contacto';
        $mail->Body    = "Nombre: $nombre\nCorreo: $correo\n\nMensaje:\n$mensaje";

       

        $mail->send();
        echo 'Mensaje enviado con éxito';
    } catch (Exception $e) {
        echo "Hubo un error al enviar el mensaje. Error: {$mail->ErrorInfo}";
    }
}
?>