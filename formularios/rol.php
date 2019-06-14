   <!--Creo una caja para el formulario para que quede mejor-->
    <div class="container">
	<fieldset>
	   	<!--Le indico como sera el metodo de envio-->
	    <form method="post" class="formu">
		    <!--Informacion-->
			<h1>Modificacion de roles</h1>
			<tr>
				<!--El DNI sera primaria -->
				<td>DNI:</td>
				<td><input type="text" id="dni" minlength="9" maxlength="9" pattern="[0-9]{8}[a-z|A-Z]" required="" autofocus><br>
				<p id="p_dni" class="error"></p></td>
			</tr>
			<select name="OS">
				<option selected value="0"> Elige una opción </option>
			   <option value="1">Administrador</option> 
			   <option value="2">Roles</option> 
			   <option value="3">Evento</option>
			   <option value="4">Estandar</option> 
			</select>
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