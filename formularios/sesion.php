   <!--Creo una caja para el formulario para que quede mejor-->
    <div class="container">
	<fieldset>
	   	<!--Le indico como sera el metodo de envio-->
	    <form method="post" class="formu">
		    <!--Informacion-->
			<h1>Inicio sesion</h1>
			<table> <!--Estara todo en una tabla para que este mas centrado todo-->
				<tr>
		  			<td>Usuario:</td>
		  			<td><input type="text" id="usuario" minlength="2" maxlength="20" required=""><br>
				</tr>
				<tr>
		  			<td>Contraseña:</td>
		  			<td><input type="password" id="contrasena" required=""><br>
		  		</tr>
			</table>
			<br>
			<!--Aqui coloco los botones. el primero es el de envio-->
		  	<input type="button" value="Enviar" id="botonenviar" onclick="envio()">
			<!--Este boton es para resetear los datos-->
	  		<input type="reset" value="Limpiar">
	   		<!--Aqui aparecera si se a completado o si tiene un fallo-->
		  	<div><a href="#">Volver</a></div>
				<div>
					<span id="mensaje"></span>
				</div>
				<br>
		</form>
	</fieldset>
	</div>