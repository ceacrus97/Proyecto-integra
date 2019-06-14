window.onload = function(){
	//Titulo
	var titulo = document.getElementById('titulo');
	titulo.addEventListener("focusout", val_tit);
	//Responsable
	const responable = document.getElementById('responable');
	responable.addEventListener("focusout", val_res);
	//Fecha (calendario)
	const fecha = document.getElementById('fecha');
	fecha.addEventListener("focusout", val_fecha);
}
function val_tit(){
	// Le doy sus restricciones.
	var vali = /^[A-z0-9]{2,20}$/;

	//Comparo si el contenido de "nombre" cumple con las restricciones asignada.
	if (vali.test(titulo.value)){
		document.getElementById('p_titulo').innerHTML = "";
		return true;
	}
	else {
		document.getElementById('p_titulo').innerHTML = "Solo letras";
		return false;
	}
}
function val_res(){

	// Le doy sus restricciones.
	var vali = /^[A-z]{2,20}$/;

	//Comparo si el contenido de "apellido1" cumple con las restricciones asignada.
	if (vali.test(responsable.value)){
		document.getElementById('p_responsable').innerHTML = "";
		return true;
	}
	else {
		document.getElementById('p_responsable').innerHTML = "Solo letras";
		return false;
	}
}
function val_fecha(){
	var defecto = "dd/mm/aaaa";
	 

	//Comparo si el contenido de "apellido1" cumple con las restricciones asignada.
	if (fecha.value != ""){
		document.getElementById('p_fecha').innerHTML = "";
		return true;
	}
	else {
		document.getElementById('p_fecha').innerHTML = "Elija una fecha";
		return false;
	}
}
function envio() {

	if (val_tit() && val_res() && val_fecha()) {		
		var parametros =
						{
							"titulo" : $('#titulo').val(),
							"responsable" : $('#responsable').val(),
							"fecha" : $('#fecha').val()
						};
					

						$.ajax({
				 			data: parametros,
				 			url: 'php/envio_even.php',
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