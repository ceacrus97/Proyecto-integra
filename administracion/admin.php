<br>
<div class='container'>
	<p><a href="mod_usu.php">Modificar datos usuario</a></p>
	<p><a href="#">Registrarse como voluntario</a></p>
	<?php
		if($_SESSION["rol"]=="1" || $_SESSION["rol"]== "2"){
			echo "<p><a href='mod_rol.php'>Cambiar Roles</a></p>";
		}
	?>
	<?php
		if($_SESSION["rol"]=="1"|| $_SESSION["rol"]== "3"){
			echo "<p><a href='reg_even.php'>Añadir Evento</a></p>";
		}
	?>
	<?php
		if($_SESSION["rol"]=="1"|| $_SESSION["rol"]== "3"){
			echo "<p><a href='elim_even.php'>Eliminar Evento</a></p>";
		}
	?>
	<p><a href="#">Darse de baja</a></p>
</div>