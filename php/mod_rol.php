<?php
require_once ('db2.php');
/*Saco los datos que me envia "rol.js" y los uso*/
$usuario = $_POST['usuario'];
$rol = $_POST['rol'];

$dbtable_users = "usuario";

/*Esto es para modificar el rol del usuario que introduci*/
$sql = "UPDATE $dbtable_users SET rol='$rol' WHERE usuario='$usuario'";
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