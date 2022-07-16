function iniciar_sesion(){
	
	email = $("#email").val();
	password = $("#password").val();
	type = 1;

	datos = {'email':email,'password':password,'type':type}

	$.ajax({
	url: '../php/controllers/login_controller.php',
	data: datos,
	type: 'POST',
	dataType: 'JSON',
		success:function(result){
			
			status = result['status'];
			message = result['message'];

			if(status == 1){

				logged = loggin(email);
				console.log(logged);

				if(logged == 1){
					location.href ="index.php";
				}else{
					Swal.fire("En este momento estamos presentando Inconvenientes", "" , "warning");
				}
				
			}else{
				Swal.fire(message, "" , "warning");
			}

		}
	});
}

function loggin(user){

	datos = {'user':user}

	$.ajax({
		url: '../php/controllers/session.php',
		data: datos,
		type: 'POST',
			success:function(r){
				console.log(r);
			}
	});

	return 1;
}