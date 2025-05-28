<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);


        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'maillerphp62@gmail.com'; 
        $mail->Password   = 'zgwnnlgzpltcfabd';       
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;



        $mail->setFrom('maillerphp62@gmail.com', 'Formulario Portafolio');
        $mail->addAddress($_POST["email"]);


        $mail->isHTML(true);
        $mail->Subject = 'Nueva solicitud de comisión';
        $mail->Body    = $_POST["message"]


         $mail->send();


         echo

         ""
         <script>
         alert("sent succesfuly");
         document.location.href = "index.html";
         </script>
         ""
}
?>
