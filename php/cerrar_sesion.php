<?php
/*Este codigo es para poder cerrar la sesion*/
	session_start();
	unset($_SESSION ["usuario"]);
	unset($_SESSION ["pasword"]);
	unset($_SESSION ["rol"]);
	header("location: ../index.php");
?>