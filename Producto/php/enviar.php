<?php  
	$destino= "mailto:71704633@junin.coar.edu.pe";
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$mensaje = $_POST["mensaje"];
	$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje; 
	mail($destino,"Contacto", $contenido);
	header("Location:file:///C:/Users/Edwin/Pictures/Producto/gracias.html");
?>