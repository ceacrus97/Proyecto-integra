// Fichero para modificar los roles de los usuarios.

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
		return true;
	}
	else {
		return false;
	}
}
function envio() {
	var rol = document.getElementById('rol');	

	if (val_usu()) {
			//Enivia los datos al fichero que trabajara con ellos
				var parametros =
						{
							"usuario" : $('#usuario').val(),
							"rol" : $('#rol').val()
						};
					

						$.ajax({
				 			data: parametros,
				 			url: 'php/mod_rol.php',
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