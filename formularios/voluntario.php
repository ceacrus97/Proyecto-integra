    <!--Creo una caja para el formulario para que quede mejor-->
    <div class="container">
	<fieldset>
	   	<!--Le indico como sera el metodo de envio-->
	    <form method="post" class="formu">
	    	<!--Informacion-->
			<h1>Registro de voluntarios</h1>
			<!--Le indico los parametros, los cuales seran obligatorios-->
			<table> <!--Estara todo en una tabla para que este mas centrado todo-->
			  	<tr>
			  		<!--Aqui se pondran cualquier dato de titulos que deseen añadir-->
			  		<td>Estudios:</td>
			  		<td><textarea id="estudios" rows="3" cols="20" placeholder="Escriba aqui cualquier titulo que posea. En caso de no tener ninguno escriba 'sin estudios'" required></textarea></td>
			  	</tr>
	  		</table>
	  		<!--Calendario contendra los dias de la semana y horas que disponen para ayudar-->
	  		<p>Calendario</p>
	  		<!--Creo una tabla nueva para organizar mejor la estructura para calendario-->
	  		<table>
	  			<tr>
	  				<td>Dias</td>
	  				<td>Hora inicio</td>
	  				<td>Hora fin</td>
	  			</tr>
	  			<!--Creo unas casillas checkbox gunto a dos casillas para introducir horas-->
	  			<tr>
	  				<td><input type="checkbox" id="cabox1" value="first_checkbox"> Lunes</td>
	  				<td><input type="time" name="lunes"></td>
	  				<td><input type="time" name="lunes"></td>
	  			</tr>
	  			<tr>
	  				<td><input type="checkbox" id="cabox2" value="first_checkbox"> Martes</td>
	  				<td><input type="time" name="martes"></td>
	  				<td><input type="time" name="martes"></td>
	  			</tr>
	  			<tr>
	  				<td><input type="checkbox" id="cabox3" value="first_checkbox"> Miercoles</td>
	  				<td><input type="time" name="miercoles"></td>
	  				<td><input type="time" name="miercoles"></td>
	  			</tr>
	  			<tr>
	  				<td><input type="checkbox" id="cabox4" value="first_checkbox"> Jueves</td>
	  				<td><input type="time" name="jueves"></td>
	  				<td><input type="time" name="jueves"></td>
	  			</tr>
	  			<tr>
	  				<td><input type="checkbox" id="cabox5" value="first_checkbox"> Viernes</td>
	  				<td><input type="time" name="viernes"></td>
	  				<td><input type="time" name="viernes"></td>
	  			</tr>
	  			<tr>
	  				<td><input type="checkbox" id="cabox6" value="first_checkbox"> Sabado</td>
	  				<td><input type="time" name="sabado"></td>
	  				<td><input type="time" name="sabado"></td>
	  			</tr>
	  			<tr>
	  				<td><input type="checkbox" id="cabox7" value="first_checkbox"> Domingo</td>
	  				<td><input type="time" name="domingo"></td>
	  				<td><input type="time" name="domingo"></td>
	  			</tr>
	  		</table>
	  		<p>Capacidades:</p>
	  		<input type="checkbox" id="cbox1" value="first_checkbox"> Carne conducir
			<input type="checkbox" id="cbox2" value="second_checkbox">Cocina
			<input type="checkbox" id="cbox3" value="second_checkbox">Idiomas
			<input type="checkbox" id="cbox4" value="second_checkbox">Otros
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