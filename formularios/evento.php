   <!--Creo una caja para el formulario para que quede mejor-->
    <div class="container">
	<fieldset>
	   	<!--Le indico como sera el metodo de envio-->
	    <form method="post" class="formu">
		    <!--Informacion-->
			<h1>Registro de Evento</h1>
			<table> <!--Estara todo en una tabla para que este mas centrado todo-->
					<tr>
				  		<!--El DNI sera primaria -->
						<td>Titulo:</td>
						<td><input type="text" id="titulo" minlength="2" maxlength="20" pattern="[A-z0-9]{2,20}" required="" autofocus><br>
						<p id="p_titulo" class="error"></p></td>
					</tr>
					<tr>
			  			<!--Tanto para nombre como para apellidos de doy un numero minimo y maximo de caracteres los cuales seran solo letras-->
				  		<td>Responsable:</td>
				  		<td><input type="text" id="responsable" minlength="2" maxlength="20" placeholder="" required><br>
						<p id="p_responsable" class="error"></p></td>
					</tr>
			</table>
			<p>Fecha:</p>
			<input id="fecha" type="date" text="dd/mm/aaaa" required="">
			<p id="p_fecha" class="error"></p>
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