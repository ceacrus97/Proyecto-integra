window.onload = function(){
	//DNI
	var dni = document.getElementById('dni');
	dni.addEventListener("focusout", val_dni);
	//Correo
	const gmail = document.getElementById('gmail');
	gmail.addEventListener("focusout", val_correo)
	//Nombre
	const nombre = document.getElementById("nombre");
	nombre.addEventListener("focusout", val_nom);
	//Apellido 1
	const apellido1 = document.getElementById('apellido1');
	apellido1.addEventListener("focusout", val_ape1);
	//Apellido 2
	const apellido2 = document.getElementById('apellido2');
	apellido2.addEventListener("focusout", val_ape2);
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
		console.log("el formato es valido");
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
	var vali = /^[A-zÀ-ÖØ-öø-ÿ]{2,20}$/;

	//Comparo si el contenido de "nombre" cumple con las restricciones asignada.
	if (vali.test(nombre.value)){
		document.getElementById('p_nombre').innerHTML = "";
		return true;
	}
	else {
		document.getElementById('p_nombre').innerHTML = "Error";
		return false;
	}
}
function val_ape1(){

	var vali = /^[A-z]{2,20}$/;

	//Comparo si el contenido de "apellido1" cumple con las restricciones asignada.
	if (vali.test(apellido1.value)){
		document.getElementById('p_apellido1').innerHTML = "";
		return true;
	}
	else {
		document.getElementById('p_apellido1').innerHTML = "Error";
		return false;
	}
}
function val_ape2(){

	var vali = /^[A-z]{0,20}$/;

	//Comparo si el contenido de "apellido2" cumple con las restricciones asignada.
	if (vali.test(apellido2.value)){
		document.getElementById('p_apellido2').innerHTML = "";
		return true;
	}
	else {
		document.getElementById('p_apellido2').innerHTML = "Error";
		return false;
	}
}
function envio() {
	if (val_nom() && val_ape1() && val_ape2() && val_correo()){
		document.getElementById("mensaje").innerHTML="";
		document.getElementById("mensaje").innerHTML+="Es valido";
	}
	else{
		document.getElementById("mensaje").innerHTML="";
		document.getElementById("mensaje").innerHTML+="Error";
	}
}