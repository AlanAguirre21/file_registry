<?php

	require_once "../../../classes/Usuario.php";
	
	$password = $_POST['user_password'];

	$datos = array(
		"user_firstname" => $_POST['user_firstname'],
		"user_lastname" => $_POST['user_lastname'],
		"username" => $_POST['username'],
		"user_rol" => $_POST['user_rol'],
		"password" => $password
		);
	
	$usuario = new Usuario();
	echo $usuario->agregarUsuario($datos);
?>