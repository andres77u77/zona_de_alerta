<?php
include '../models/gestion_temperatura.php';

$datos = MainModelTemperatura::ConsultarNotificaciones();

$array_datos = array();

foreach ($datos as $key){
	array_push($array_datos, $key['valor_temp']);
}

echo json_encode($array_datos);

?>