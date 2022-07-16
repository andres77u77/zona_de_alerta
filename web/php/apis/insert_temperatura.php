<?php
header('Access-Control-Allow-Origin: *');
include '../controllers/main_controller_temperatura.php';
include 'Enviar_SMS.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){


	if (array_key_exists('token', $_POST)){

		$token = $_POST['token'];

		if($token == "8adjHDSJ7255ppKJ"){

			$temperatura = $_POST['temp'];
			$humedad = $_POST['hum'];

			$insert = InsertDatos($temperatura,$humedad);	

			echo $insert;

			//Enviar SMS

			$sDestination = "+573228760890,573209859251";
			$sMessage = 'Zona de Alerta: ALERTA DE TEMPERATURA, ACTUAL: '.$temperatura;  
			$debug = false;
			$sSenderId = '';

			echo $Res_Func_SMS = AltiriaSMS($sDestination, $sMessage, $debug, $sSenderId);


			if($temperatura >= 8 || $temperatura <= 12){
				echo "temperatura estable";
			}else{
				echo "Enviar SMS de alerta";
			}
			
		}else{
			//echo 5;
			echo "Token invalido";
		}

	}else{
		//echo 6;
		echo "Falta el token de autenticacion";
	}

}else{
	//echo 7;
	echo "El metodo no corresponde";
}


?>

