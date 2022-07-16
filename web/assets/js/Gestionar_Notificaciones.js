$(document).ready(CargarUsuarios());
function CargarUsuarios(){

	$.ajax({
	url: '../php/controllers/gestionar_notificaciones_controller.php',
	type: 'post',
		success:function(table){
			$("#usuarios_select").html(table);
		}
	});

}

function ActualizarNotTemp(){

	usuario_temp = $("#usuarios_select").val();

	if(usuario_temp == ''){
		Swal.fire("Debes seleccionar un usuario");
		return 0;
	}

	datos = {'usuario_temp':usuario_temp,'tipo':'ActualizarNotTemp'};

	$.ajax({
	url: '../controllers/gestionar_notificaciones_controller.php',
	data: datos,
	type: 'post',
		success:function(R){
			alert(R);
		}
	});

}