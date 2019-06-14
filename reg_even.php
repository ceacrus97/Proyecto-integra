<!--Pagina de registro de usuario del proyecto-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("index/estilo.php"); ?>
	<script type="text/javascript" src="js/reg_even.js"></script>
	<title>Registro de Eventos</title>
</head>
<body>
	<!--Esto es para separar el codigo de la pagina y incluirlos en esta pagina llamando al codigo-->
	<?php include("index/header_admin.php"); ?>
	<?php include("formularios/evento.php"); ?>
</body>
</html>