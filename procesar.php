<?php

$destino = "hello@dicofra.com";

$name = $_POST['name'];
$empresa = $_POST['empresa'];
$email = $_POST['email'];

$header = "Envio desde formulario de contacto";
$mensajeCompleto = "\n Nombre :" . $name . "\n" . "Empresa :" . $empresa . "\n" . "Email :" . $email;
mail($destino, $header, $mensajeCompleto);
echo "Datos enviados correctamente";
header('Location: microsegmentacion.html'); 



