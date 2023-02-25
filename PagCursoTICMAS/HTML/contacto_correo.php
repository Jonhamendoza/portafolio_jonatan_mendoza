<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje-contacto'];


$header = 'De: ' .$email . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . "\r\n";
$mensaje .= "Su email es: " . $email . "\r\n";
$mensaje .= "Telefono de contacto: " . $telefono . "\r\n";
$mensaje .= "Mensaje enviado: " . $_POST['mensaje-contacto'] . "\r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = 'jonatandevelopermendoza@gmail.com';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($mensaje), $header);
header("Location:index.html");
?>