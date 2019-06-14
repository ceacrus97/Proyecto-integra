<!--Pagina principal del proyecto-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("index/estilo.php"); ?>
	<title>Voluntario</title>
</head>
<body>

	<!--Esto es para separar el codigo de la pagina y incluirlos en esta pagina llamando al codigo-->
	<?php include("index/header.php"); ?>
	<?php include("formularios/voluntario.php"); ?>
	<?php include("index/footer.php"); ?>
</body>
</html>