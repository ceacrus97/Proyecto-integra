<!--Pagina de administrador-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("index/estilo.php"); ?>
	<script type="text/javascript" src="js/mod_usu.js"></script>
	<title>Modificar Usuario</title>
</head>
<body>
	<!--Esto es para separar el codigo de la pagina y incluirlos en esta pagina llamando al codigo-->
	<?php include("index/header_admin.php"); ?>
	<?php include("formularios/mod_usu.php"); ?>
</body>
</html>