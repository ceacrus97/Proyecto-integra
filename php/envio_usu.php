<?php
require_once ('db2.php');
/*Saco los datos que me envia "registro.js" y los uso*/
$dni = $_POST['dni'];
$gmail = $_POST['gmail'];
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$direccion = $_POST['direccion'];
$usuario = $_POST['usuario'];
$contrasena = MD5($_POST['contrasena']);

$dbtable_users = "usuario";

/*Esto es para que los datos de arriba me lo guarde en la base de datos en las columnas correspondiente*/
$sql = "INSERT INTO $dbtable_users (dni_usu, correo_usu, nombre, apellido1, apellido2, direccion, usuario, contrasena, roles) VALUES
	('$dni', '$gmail', '$nombre', '$apellido1', '$apellido2', '$direccion', '$usuario', '$contrasena', '4')";
	/*Si se ha guardado muestro este mensaje*/
	if ($conn->query($sql) === TRUE) {
	    echo "Los registros de usuario han sido creado con exito";
	    echo "<br>";
	} 
	/*Si falla este*/
	else {
	    die("Error con los registros: " . $conn->error);
	}
?>