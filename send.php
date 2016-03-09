<?php
	$destino = "fabianmorar1223@gmail.com";
	$nombre = $_GET["name"];
	$correo = $_POST["email"];
	$mensaje = $_POST["message"];
	$contenido = "Nombre " . $nombre ."\nCorreo: " . $correo . "\nMensaje: " .$mensaje;
	var_dump($contenido);
	exit();
	mail($destino, "Mail from website", $contenido);
	header("Location:index.html") 
?>