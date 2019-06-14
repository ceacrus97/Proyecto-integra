	   <!--Creo una caja para el formulario para que quede mejor-->
    <div class="container">
	<fieldset>
	   	<!--Le indico como sera el metodo de envio-->
	    <form method="post" class="formu">
		    <!--Informacion-->
			<h1>Eliminar Evento</h1>
			<br>
			Id: <input type="text" id="id" minlength="1" maxlength="3" required><br>
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
	<?php include("php/mos_even_elim.php"); ?>
	</div>
