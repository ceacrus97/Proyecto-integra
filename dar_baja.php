<!--Pagina darse de baja-->
<!--Esto sera para poder mantener el inicio de sesion con los datos que le pase-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--Esto es para incluir los estilos y demas que se incluyen en varias pagina-->
	<?php include("index/estilo.php"); ?>
	<!--Esto es para incluir la validacion que solo afectara a esta pagina-->
	<script type="text/javascript" src="js/dar_baja.js"></script>
	<title>Eliminar Evento</title>
</head>
<body>
	<!--Esto es para separar el codigo de la pagina y incluirlos en esta pagina llamando al codigo-->
	<?php include("index/header_admin.php"); ?>
	<?php include("formularios/dar_baja.php"); ?>
</body>
</html>