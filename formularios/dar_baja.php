	<!--Cuerpo para dar de baja-->
   	<!--Creo una caja para el formulario para que quede mejor-->
    <div class="container">
	<fieldset>
	   	<!--Le indico como sera el metodo de envio-->
	    <form method="post" class="formu">
		    <!--Informacion-->
			<h1>Modificacion de usuarios</h1>
			<table> <!--Estara todo en una tabla para que este mas centrado todo-->
				<!--Mostrara el nombre de usuario actual, pero no te dejara modificarlo-->
					<?php
						$usuario = $_SESSION['usuario'];
						echo "<tr>
					  			<td>Usuario:</td>
					  			<td><input type='text' id='usuario' value='$usuario' disabled><br>
								<p id='p_usuario' class='error'></p></td>
							</tr>";
					?>
			</table>
			<br>
			<p>¿Esta seguro?</p>
			<!--Aqui coloco los botones. el primero es el de envio-->
		  	<input type="button" value="Si" id="botonenviar" onclick="envio()">
			<!--Este boton es para resetear los datos-->
	  		<input type="reset" value="Limpiar">
	   		<!--Aqui aparecera si se a completado o si tiene un fallo-->
		  	<div><a href="administrador.php">Volver</a></div>
				<div>
					<span id="mensaje"></span>
				</div>
				<br>
		</form>
	</fieldset>
	</div>