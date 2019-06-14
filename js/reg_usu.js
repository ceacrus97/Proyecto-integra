// Fichero para el registro de datos de los usuarios.

// Voy creando las distintas funciones que necesitares.

window.onload = function(){
	//DNI
	var dni = document.getElementById('dni');
	dni.addEventListener("focusout", val_dni);
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
	//Usuario
	const usuario = document.getElementById('usuario');
	usuario.addEventListener("focusout", val_usu);
	//Contraseña
	const contrasena = document.getElementById('contrasena');
	contrasena.addEventListener("focusout", val_conta);
	//Validar
	const validar = document.getElementById('validar');
	validar.addEventListener("focusout", val_val);
}
function val_dni(){
	var vali = /^[0-9]{8}[A-z]$/;

	var numero = dni.value.slice(0,8);
	var letra = dni.value.slice(8);

	/*Creo una variable con un array*/
	var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];
	/*Hago la division con 23 y los compruebo con el array. Si la letra dada por el array es la misma que la introducida se dara por valida.
	Primero compruebo que el "dni" se relleno con mis condiciones. Luego realizo todo esto en un bucle en el que me mostrara un menseje en el que me dira si es correcto o no*/
	var calculo = numero % 23;

	if (vali.test(dni.value)){
		if (letras[calculo] == letra.toUpperCase()){
			document.getElementById('p_dni').innerHTML = "";
			return true;
		}else{
			document.getElementById('p_dni').innerHTML = "La letra no es correcta";
			return false;
		}
	}else {
		document.getElementById('p_dni').innerHTML = "El formato no es correcto";
		return false;
	}

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

	var direccion = document.getElementById('direccion');

	if (val_dni() && val_correo() && val_nom() && val_ape1() && val_ape2() && val_usu() && val_conta() && val_val()) {
		
		var parametros =
						{
							"dni" : $('#dni').val(),
							"gmail" : $('#gmail').val(),
							"nombre" : $('#nombre').val(),
							"apellido1" : $('#apellido1').val(),
							"apellido2" : $('#apellido2').val(),
							"direccion" : $('#direccion').val(),
							"usuario" : $('#usuario').val(),
							"contrasena" : $('#contrasena').val()
						};
					

						$.ajax({
				 			data: parametros,
				 			url: 'php/envio_usu.php',
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