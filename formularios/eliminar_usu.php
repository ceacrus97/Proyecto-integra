   	<!--Cuerpo para eliminar usuario-->
   	<!--Creo una caja para el formulario para que quede mejor-->
    <div class="container">
	<fieldset>
	   	<!--Le indico como sera el metodo de envio-->
	    <form method="post" class="formu">
		    <!--Informacion-->
			<h1>Eliminar a un usuarios</h1>
			<table> <!--Estara todo en una tabla para que este mas centrado todo-->
				<tr>
					<!--Usuario tiene que tener entre 2 y 20 caracteres-->
					<!--El usuario que se escriba aqui sera eliminado-->
		  			<td>Usuario:</td>
		  			<td><input type="text" id="usuario" minlength="2" maxlength="20" placeholder="Usa letras y/o numeros" required=""><br>
					<p id="p_usuario" class="error">*Entre 2 y 20 caracteres</p></td>
				</tr>
			</table>
			<br>
			<!--Aqui coloco los botones. el primero es el de envio-->
		  	<input type="button" value="Enviar" id="botonenviar" onclick="envio()">
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