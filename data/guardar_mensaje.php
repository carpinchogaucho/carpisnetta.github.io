<?php

$destinatario = "c.carpincho.gaucho@gmail.com";
$asunto = "Nueva solicitud de comisión desde el portafolio";


$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];


try {
    $pdo = new PDO("mysql:host=localhost;dbname=tu_bd", "tu_usuario", "tu_clave");
    $stmt = $pdo->prepare("INSERT INTO mensajes_contacto (nombre, correo, mensaje) VALUES (?, ?, ?)");
    $stmt->execute([$nombre, $correo, $mensaje]);
} catch (Exception $e) {
    
}


$cuerpo = "Has recibido una nueva solicitud de comisión:\n\n";
$cuerpo .= "Nombre: $nombre\n";
$cuerpo .= "Correo: $correo\n";
$cuerpo .= "Mensaje:\n$mensaje\n";


$cabeceras = "From: no-responder@tudominio.com\r\n";
$cabeceras .= "Reply-To: $correo\r\n";
$cabeceras .= "Content-Type: text/plain; charset=UTF-8\r\n";


mail($destinatario, $asunto, $cuerpo, $cabeceras);


header("Location: ../gracias.html");
exit;
?>