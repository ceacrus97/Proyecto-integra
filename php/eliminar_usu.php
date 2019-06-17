<?php
require_once ('db2.php');
/*Saco los datos que me envia "eliminar_usu.js" y los uso*/
$usuario = $_POST['usuario'];

$dbtable_users = "usuario";

/*Esto es para que borre el usuario que se le ha enviado*/
$sql = "DELETE FROM  $dbtable_users WHERE usuario = '$usuario'";
	/*Si se ha guardado muestro este mensaje*/
	if ($conn->query($sql) === TRUE) {
	    echo "Se elimino con exito";
	    echo "<br>";
	} 
	/*Si falla este*/
	else {
	    die("Error con los registros: " . $conn->error);
	}
?>