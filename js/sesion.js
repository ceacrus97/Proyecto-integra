// Fichero para el registro de datos de los usuarios.

// Voy creando las distintas funciones que necesitares.

window.onload = function(){
	//Usuario
	const usuario = document.getElementById('usuario');
	usuario.addEventListener("focusout", val_usu);
	//Contraseña
	const contrasena = document.getElementById('contrasena');
	contrasena.addEventListener("focusout", val_conta);
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
function val_conta(){
	//Cojo los datos de ambas contraseñas para verificar si son iguales
	var vali = /^[a-zA-Z0-9]{6,10}$/;

	if (vali.test(contrasena.value)){
		return true;
	}
	else {
		return false;
	}
}

function envio() {

	var direccion = document.getElementById('direccion');

	if (val_usu() && val_conta()) {
				var loc = "administrador.php";
				var parametros =
						{
							"usuario" : $('#usuario').val(),
							"contrasena" : $('#contrasena').val()
						};
					

						$.ajax({
				 			data: parametros,
				 			url: 'php/sesiones.php',
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
		document.getElementById('mensaje').innerHTML = "El usuario y/o la contraseña no existen";
	}
}