// Fichero para el registro de datos de los usuarios.

// Voy creando las distintas funciones que necesitares.

window.onload = function(){
	//Correo
	const gmail = document.getElementById('gmail');
	gmail.addEventListener("focusout", val_correo);
	//Nombre
	const nombre = document.getElementById("nombre");
	nombre.addEventListener("focusout", val_nom);
	//Apellido 1
	const apellido1 = document.getElementById('apellido1');
	apellido1.addEventListener("focusout", val_ape1);
	//Apellido 2
	const apellido2 = document.getElementById('apellido2');
	apellido2.addEventListener("focusout", val_ape2);
	//Contraseña
	const contrasena = document.getElementById('contrasena');
	contrasena.addEventListener("focusout", val_conta);
	//Validar
	const validar = document.getElementById('validar');
	validar.addEventListener("focusout", val_val);
}
function val_correo(){
	// Le doy sus restricciones.
	var vali = /\b[\w\.-]+@[\w\.-]+\.\w{2,4}\b/;

	//Comparo si el contenido de "gmail" cumple con las restricciones asignada.
	if (vali.test(gmail.value)){
		document.getElementById('p_correo').innerHTML = "";
		return true;
	}
	else {
		document.getElementById('p_correo').innerHTML = "¿Esta seguro que es un correo?";
		return false;
	}
}
function val_nom(){
	// Le doy sus restricciones.
	var vali = /^[A-z]{2,20}$/;

	//Comparo si el contenido de "nombre" cumple con las restricciones asignada.
	if (vali.test(nombre.value)){
		document.getElementById('p_nombre').innerHTML = "";
		return true;
	}
	else {
		document.getElementById('p_nombre').innerHTML = "Solo letras";
		return false;
	}
}
function val_ape1(){

	// Le doy sus restricciones.
	var vali = /^[A-z]{2,20}$/;

	//Comparo si el contenido de "apellido1" cumple con las restricciones asignada.
	if (vali.test(apellido1.value)){
		document.getElementById('p_apellido1').innerHTML = "";
		return true;
	}
	else {
		document.getElementById('p_apellido1').innerHTML = "Solo letras";
		return false;
	}
}
function val_ape2(){
	// Le doy sus restricciones.
	var vali = /^[A-z]{0,20}$/;

	//Comparo si el contenido de "apellido2" cumple con las restricciones asignada.
	if (vali.test(apellido2.value)){
		document.getElementById('p_apellido2').innerHTML = "";
		return true;
	}
	else {
		document.getElementById('p_apellido2').innerHTML = "Solo letras";
		return false;
	}
}
function val_conta(){
	//Cojo los datos de ambas contraseñas para verificar si son iguales
	var vali = /^[a-zA-Z0-9]{6,10}$/;

	if (vali.test(contrasena.value)){
		document.getElementById('p_contrasena').innerHTML = "";
		return true;
	}
	else {
		document.getElementById('p_contrasena').innerHTML = "Entre 6 y 10 letras y/o numeros";
		return false;
	}
}
function val_val(){

	if (contrasena.value == validar.value){
		document.getElementById('p_validar').innerHTML = "";
		return true;
	}
	else {
		document.getElementById('p_validar').innerHTML = "Las dos contraseñas no conciden";
		return false;
	}
}
function envio() {

	var usuario = document.getElementById('usuario');
	var direccion = document.getElementById('direccion');

	if (val_correo() && val_nom() && val_ape1() && val_ape2() && val_conta() && val_val()) {
		var parametros =
						{
							"usuario" : $('#usuario').val(),
							"gmail" : $('#gmail').val(),
							"nombre" : $('#nombre').val(),
							"apellido1" : $('#apellido1').val(),
							"apellido2" : $('#apellido2').val(),
							"direccion" : $('#direccion').val(),
							"contrasena" : $('#contrasena').val()
						};
					

						$.ajax({
				 			data: parametros,
				 			url: 'php/mod_usu.php',
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