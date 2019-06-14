   <!--Creo una caja para el formulario para que quede mejor-->
    <div class="container">
	<fieldset>
	   	<!--Le indico como sera el metodo de envio-->
	    <form method="post" class="formu">
		    <!--Informacion-->
			<h1>Modificacion de usuarios</h1>
			<table> <!--Estara todo en una tabla para que este mas centrado todo-->
					<?php
						$usuario = $_SESSION['usuario'];
						$correo = $_SESSION['correo'];
						$nombre = $_SESSION['nombre'];
						$apellido1 = $_SESSION['apellido1'];
						$apellido2 = $_SESSION['apellido2'];
						$direccion = $_SESSION['direccion'];
						$contrasena = $_SESSION['contrasena'];

						echo "<tr>
					  			<td>Usuario:</td>
					  			<td><input type='text' id='usuario' value='$usuario' disabled><br>
								<p id='p_usuario' class='error'></p></td>
							</tr>";
					  	echo "<tr>
									<!--Gmail tendra el siguiente patron: caracteres + @ + caracteres + . + 'entre 2 y 4 caracteres' -->
									<td>Correo:</td>
									<td><input type='text' id='gmail' value='$correo' placeholder='Correo electronico' pattern='\b[\w\.-]+@[\w\.-]+\.\w{2,4}\b' required='' ><br>
										<p id='p_correo' class='error'></p></td>
									</tr>";

						echo "<tr>
					  			<!--Tanto para nombre como para apellidos de doy un numero minimo y maximo de caracteres los cuales seran solo letras-->
						  		<td>Nombre:</td>
						  		<td><input type='text' id='nombre' value='$nombre' minlength='2' maxlength='20' placeholder='' required><br>
								<p id='p_nombre' class='error'></p></td>
							</tr>";
						echo "<tr>
						  		<td>Apellido1:</td>
						  		<td><input type='text' id='apellido1' value='$apellido1' minlength='2' maxlength='20' placeholder=''  
						  		pattern='[A-z]{2,20}' required><br>
						  		<p id='p_apellido1' class='error'></p></td>
						  	</tr>";
						  echo "<tr>
						  		<td>Apellido2:</td>
						  		<td><input type='text' id='apellido2' value='$apellido2' minlength='2' maxlength='20' placeholder=''  
						  		pattern='[A-z]{2,20}' required><br>
						  		<p id='p_apellido2' class='error'></p></td>
						  	</tr>";
						  echo "<tr>
						  		<!--Drieccion tendra un minimo y un maximo de caracteres, pero sin restriccion con expresiones regulares-->
						  		<td>Direccion:</td>
						  		<td><input type='text' id='direccion' value='$direccion' minlength='10' maxlength='150' placeholder=''  required><br>
						  		<p id='p_direccion' class='error'></p></td>
						  	</tr>";
						echo "<tr>
								<!--Contraseña tiene que tener entre 6 y 10 caracteres-->
					  			<td>Contraseña:</td>
					  			<td><input type='password' id='contrasena' value='$contrasena' placeholder='Letras y/o numeros' required=''><br>
						  		<p id='p_contrasena' class='error'>*Entre 6 y 10 caracteres</p></td>
					  		</tr>";
					  	echo "<tr>
				  			<!--Esto tiene que contener exactamente lo mismo que en contraseña-->
				  			<td>Repetir Contraseña:</td>
				  			<td><input type='password' id='validar' value='$contrasena' required><br>
					  		<p id='p_validar' class='error'>*Entre 6 y 10 caracteres</p></td>
				  		</tr>"
					?>
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