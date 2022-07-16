<?php
include '../models/login_model.php';

$status = $_POST['type'];

if($status == 1){

	$user = $_POST['email'];
	$pass = $_POST['password'];
	
	$login = getLogin($user,$pass);

	echo json_encode($login);
}

function getLogin($user,$pass){

	$result = MainModelLogin::ValidarUsuario($user);

	if($result == '' || $result == null || empty($result)){

		$data_result = array(
			'status' => 0,
			'message' => 'El usuario no existe en el sistema'
		);

	}else{
		
		$datos_usuario = $result[0];

		//Validar la contraseña

		$pass_bd = $datos_usuario['clave'];
		$estado_bd = $datos_usuario['estado'];

		if($pass == $pass_bd){
			
			//Validar estado del usuario

			if($estado_bd == 1){

				$data_result = array(
					'status' => 1,
					'message' => 'Login correcto'
				);

			}else{

				$data_result = array(
					'status' => 2,
					'message' => 'El usuario se encuentra inactivo'
				);

			}

		}else{
			
			$data_result = array(
				'status' => 3,
				'message' => 'Clave Incorrecta'
			);

		}

	}	

	return $data_result;
}

?>