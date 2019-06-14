<!--Pagina de administrador-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("index/estilo.php"); ?>
	<title>Administrador</title>
</head>
<body>
	<!--Esto es para separar el codigo de la pagina y incluirlos en esta pagina llamando al codigo-->
	<?php include("index/header_admin.php"); ?>
	<?php include("administracion/admin.php"); ?>
</body>
</html>