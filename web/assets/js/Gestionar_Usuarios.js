$(document).ready(CargarUsuarios());
function CargarUsuarios(){

	$.ajax({
	url: '../php/controllers/gestionar_usuarios_controller.php',
	type: 'post',
		success:function(table){
			$("#table_gestionar_usuarios").html(table);
		}
	});

}