<!--Pagina principal del proyecto-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("index/estilo.php"); ?>
	<link rel="stylesheet" href="css/est_usu.css"/>
	<script type="text/javascript" src="js/sesion.js"></script>
	<title>Inicio sesion</title>
</head>
<body>

	<!--Esto es para separar el codigo de la pagina y incluirlos en esta pagina llamando al codigo-->
	<?php include("index/header.php"); ?>
	<?php include("formularios/sesion.php"); ?>
	<?php include("index/footer.php"); ?>
</body>
</html>