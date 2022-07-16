$(document).ready(CargarNotificaciones());
function CargarNotificaciones(){

	datos = {'tipo':'CargarNotificaciones'};

	$.ajax({
	url: '../php/controllers/main_controller_temperatura.php',
	type: 'post',
	data: datos,
		success:function(table){
			$("#table_alertas_Generadas").html(table);
		}
	});

}