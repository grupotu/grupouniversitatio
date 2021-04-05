<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$carrera = $_POST['carrera'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];


// Datos para el correo
$destinatario = "gtuplanteles@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "carrera: $carrera";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";


// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');

?>