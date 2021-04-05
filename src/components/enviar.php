<?php
$destinatario="jhumerspaul@gmail.com";
$nombre=$_POST['nombre'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];
$email=$_POST['email'];

$cabeza = "Enviado desde el portafolio jhumersPaul";

$mensajeCompleto=$mensaje."\nAtentamente: ". $nombre;

mail($destinatario,$asunto,$mensajeCompleto,$cabeza);
echo "<script>alert('Correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"\location.href='index.html'\",1000)</script>";

?>