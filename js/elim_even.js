window.onload = function(){
	//Id
	var id = document.getElementById('id');
	id.addEventListener("focusout", val_id);
}
function val_id(){
	// Le doy sus restricciones.
	var vali = /^[0-9]{1,3}$/;

	//Comparo si el contenido de "nombre" cumple con las restricciones asignada.
	if (vali.test(id.value)){
		return true;
	}
	else {
		return false;
	}
}
function envio() {

	if (val_id()) {
		var parametros =
						{
							"id" : $('#id').val()
						};
					

						$.ajax({
				 			data: parametros,
				 			url: 'php/eliminar_evento.php',
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