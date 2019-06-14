<?php
require_once ('db2.php');
/*Saco los datos que me envia "registro.js" y los uso*/
$titulo = $_POST['titulo'];
$responsable = $_POST['responsable'];
$fecha = $_POST['fecha'];


$dbtable_users = "evento";

/*Esto es para que los datos de arriba me lo guarde en la base de datos en las columnas correspondiente*/
$sql = "INSERT INTO $dbtable_users (titulo, responsable, fecha) VALUES ('$titulo', '$responsable', '$fecha')";
	/*Si se ha guardado muestro este mensaje*/
	if ($conn->query($sql) === TRUE) {
	    echo "Los registros de evento han sido creado con exito";
	    echo "<br>";
	} 
	/*Si falla este*/
	else {
	    die("Error con los registros: " . $conn->error);
	}
?>