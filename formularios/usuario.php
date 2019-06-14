   <!--Creo una caja para el formulario para que quede mejor-->
    <div class="container">
	<fieldset>
	   	<!--Le indico como sera el metodo de envio-->
	    <form method="post" class="formu">
		    <!--Informacion-->
			<h1>Registro de usuarios</h1>
			<table> <!--Estara todo en una tabla para que este mas centrado todo-->
					<tr>
				  		<!--El DNI sera primaria -->
						<td>DNI:</td>
						<td><input type="text" id="dni" minlength="9" maxlength="9" pattern="[0-9]{8}[a-z|A-Z]" required="" autofocus><br>
						<p id="p_dni" class="error"></p></td>
					</tr>
					<tr>
						<!--Gmail tendra el siguiente patron: caracteres + @ + caracteres + . + "entre 2 y 4 caracteres" -->
						<td>Correo:</td>
						<td><input type="text" id="gmail" placeholder="Correo electronico" pattern="\b[\w\.-]+@[\w\.-]+\.\w{2,4}\b" 
						required=""><br>
						<p id="p_correo" class="error"></p></td>
					</tr>
					<tr>
			  			<!--Tanto para nombre como para apellidos de doy un numero minimo y maximo de caracteres los cuales seran solo letras-->
				  		<td>Nombre:</td>
				  		<td><input type="text" id="nombre" minlength="2" maxlength="20" placeholder="" required><br>
						<p id="p_nombre" class="error"></p></td>
					</tr>
					<tr>
				  		<td>Apellido1:</td>
				  		<td><input type="text" id="apellido1" minlength="2" maxlength="20" placeholder=""  pattern="[A-z]{2,20}" required><br>
				  		<p id="p_apellido1" class="error"></p></td>
				  	</tr>
				  	<tr>
				  		<td>Apellido2:</td>
				  		<td><input type="text" id="apellido2" minlength="2" maxlength="20" placeholder="*No obligatorio"  pattern="[A-z]{0,20}"><br>
				  		<p id="p_apellido2" class="error"></p></td>
				  	</tr>
				  	<tr>
				  		<!--Drieccion tendra un minimo y un maximo de caracteres, pero sin restriccion con expresiones regulares-->
				  		<td>Direccion:</td>
				  		<td><input type="text" id="direccion" minlength="10" maxlength="150" placeholder=""  required><br>
				  		<p id="p_direccion" class="error"></p></td>
				  	</tr>
				<tr>
					<!--Usuario tiene que tener entre 2 y 20 caracteres-->
		  			<td>Usuario:</td>
		  			<td><input type="text" id="usuario" minlength="2" maxlength="20" placeholder="Usa letras y/o numeros" required=""><br>
					<p id="p_usuario" class="error">*Entre 2 y 20 caracteres</p></td>
				</tr>
				<tr>
					<!--Contraseña tiene que tener entre 6 y 10 caracteres-->
		  			<td>Contraseña:</td>
		  			<td><input type="password" id="contrasena" placeholder="Letras y/o numeros " required=""><br>
			  		<p id="p_contrasena" class="error">*Entre 6 y 10 caracteres</p></td>
		  		</tr>
		  		<tr>
		  			<!--Esto tiene que contener exactamente lo mismo que en contraseña-->
		  			<td>Repetir Contraseña:</td>
		  			<td><input type="password" id="validar" required><br>
			  		<p id="p_validar" class="error">*Entre 6 y 10 caracteres</p></td>
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