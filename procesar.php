<?php

$destino = "guglielmojonathan@gmail.com";

$nombre = $_POST['introducir_nombre'];
$email = $_POST['introducir_email'];
$company = $_POST['introducir_empresa'];

$header = "Envio desde formulario de contacto";
$mensajeCompleto = "\n Nombre :" . $nombre . "\n" . "Email :" . $email . "\n" . "Empresa :" . "\n" . $company;

mail($destino, $mensajeCompleto, $header);
header('location: index.html');
