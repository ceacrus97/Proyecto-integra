<?php
require_once ('db2.php');
/*Saco los datos que me envia "registro.js" y los uso*/
$usuario = $_POST['usuario'];
$gmail = $_POST['gmail'];
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$direccion = $_POST['direccion'];

$dbtable_users = "usuario";

/*Esto es para que los datos de arriba me lo guarde en la base de datos en las columnas correspondiente*/
$sql = "UPDATE $dbtable_users SET correo_usu='$gmail',nombre='$nombre',apellido1='$apellido1',apellido2='$apellido2',direccion='$direccion' WHERE usuario='$usuario'";
	/*Si se ha guardado muestro este mensaje*/
	if ($conn->query($sql) === TRUE) {
	    echo "Los registros de usuario han sido modificado con exito";
	    echo "<br>";
	} 
	/*Si falla este*/
	else {
	    die("Error con los registros: " . $conn->error);
	}
?>