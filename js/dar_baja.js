// Fichero para darse de baja.

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
	/*Con esto si consigue darse de baja le devolvera a la pagina principal*/
	if (val_usu()) {
		var loc = "index.php";
		var parametros =
						{
							"usuario" : $('#usuario').val()
						};
					

						$.ajax({
				 			data: parametros,
				 			url: 'php/dar_baja.php',
				 			type: 'post',
				 			beforeSend: function(){
				 				$("#mensaje").html("Procesando, espere por favor...");
				 			},
				 			success: function(response){
				 			/*Con preventDefault si no inicia sesion me permanece en la pagina y si todo es correcto me envia a mi index */
							if (response == "El usuario no existe"){
								$("#mensajito").html(response);
							}
							else {
								location.href= loc;
							}
				 			}
				 		});
	}
	else{
		document.getElementById('mensaje').innerHTML = "Error, siga las instrucciones";
	}
}