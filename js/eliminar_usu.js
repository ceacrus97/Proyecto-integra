// Fichero para el eliminar usuarios.

// Voy creando las distintas funciones que necesitares.

window.onload = function(){
	//Usuario
	const usuario = document.getElementById('usuario');
	usuario.addEventListener("focusout", val_usu);
}
function val_usu(){
	// Le doy sus restricciones.
	var vali = /^[a-zA-Z0-9]{2,20}$/;

	//Comparo si el contenido de "usuario" cumple con las restricciones asignada.
	if (vali.test(usuario.value)){
		document.getElementById('p_usuario').innerHTML = "";
		return true;
	}
	else {
		document.getElementById('p_usuario').innerHTML = "Entre 2 y 20 letras y/o numeros";
		return false;
	}
}
function envio() {

	if (val_usu()) {
		//Enivia los datos al fichero que trabajara con ellos
		var parametros =
						{
							"usuario" : $('#usuario').val()
						};
					

						$.ajax({
				 			data: parametros,
				 			url: 'php/eliminar_usu.php',
				 			type: 'post',
				 			beforeSend: function(){
				 				$("#mensaje").html("Procesando, espere por favor...");
				 			},
				 			success: function(response){
				 				$("#mensaje").html(response);
				 			}
				 		});
	}
	else{
		document.getElementById('mensaje').innerHTML = "Error, siga las instrucciones";
	}
}