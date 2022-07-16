<?php

if (array_key_exists('user', $_POST)){

	$user = $_POST['user'];
    session_start();
	$_SESSION["email"] = $user;
	echo 1;
}else{

	session_start();
	$email_logged = $_SESSION['email'];

	if (!isset($_SESSION['email'])) {
	    header('location: ../index.php');
	}

	//Consultar los datos del usuario loggeado

	include '../php/models/login_model.php';

	$data_r = MainModelLogin::ValidarUsuario($email_logged);
	$datos_usuario = $data_r[0];

	$id_empresa = $datos_usuario['id_empresa'];
	$_SESSION["id_empresa"] = $id_empresa;
    $nombre = $datos_usuario['nombre'];
    $email = $datos_usuario['nombre'];
    $telefono = $datos_usuario['nombre'];
    $direccion = $datos_usuario['nombre'];
    $foto = $datos_usuario['nombre'];
	$rol = $datos_usuario['rol'];	
	$_SESSION["rol"] = $rol;
	
}

?>