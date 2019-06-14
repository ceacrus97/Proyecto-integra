<?php
session_start();
require_once ('db2.php');

/*Cojo los datos del login*/
$usuario = $_POST['usuario'];
$contrasena = MD5($_POST['contrasena']);

/*Con esto  mira si existe en mi base de datos */
$sql = "SELECT * FROM usuario WHERE usuario='$usuario' AND contrasena='$contrasena'";

$return = $conn->query($sql);
/*Si existe me inicia sesion*/
if ($return->num_rows > 0) {
    while($row = $return->fetch_assoc()) {
    	$_SESSION['correo'] = $row['correo_usu'];
    	$_SESSION['nombre'] = $row['nombre'];
    	$_SESSION['apellido1'] = $row['apellido1'];
    	$_SESSION['apellido2'] = $row['apellido2'];
    	$_SESSION['direccion'] = $row['direccion'];
        $_SESSION['usuario'] = $row['usuario'];
        $_SESSION['contrasena'] = $row['contrasena'];
		$_SESSION['rol'] = $row['rol'];
		echo $_SESSION['usuario'] ;
    }
} 
/*Si no muestra el siguiente mensaje de error*/
else {
    echo "El usuario no existe";
}


?>