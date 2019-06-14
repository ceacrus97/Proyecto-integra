<!--Pagina principal del proyecto-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("index/estilo.php"); ?>
	<link rel="stylesheet" href="css/est_mapa.css"/>
	<title>Mapa de sitio</title>
</head>
<body>

	<!--Esto es para separar el codigo de la pagina y incluirlos en esta pagina llamando al codigo-->
	<?php include("index/header.php"); ?>
	<?php include("index/mapa_sitio.php"); ?>
	<?php include("index/footer.php"); ?>
</body>
</html>