<?php
require_once ('db2.php');
/*Saco los datos que me envia "registro.js" y los uso*/
$id = $_POST['id'];

$dbtable_users = "evento";

/*Esto es para que los datos de arriba me lo guarde en la base de datos en las columnas correspondiente*/
$sql = "DELETE FROM  $dbtable_users WHERE cod_evento = '$id'";
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