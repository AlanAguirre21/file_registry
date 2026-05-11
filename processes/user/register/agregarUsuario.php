<?php

	require_once "../../../classes/Usuario.php";

	$password = $_POST['user_password'];
	$hash = password_hash($password, PASSWORD_ARGON2ID);
	$username = $_POST['username'];

	$datos = array(
		"user_firstname" => $_POST['user_firstname'],
		"user_lastname" => $_POST['user_lastname'],
		"username" => $username,
		"user_rol" => $_POST['user_rol'],
		"password" => $hash
		);

	$usuario = new Usuario();

	if($usuario->buscarUsuarioRepetido($username)){
		return 2;
	} else {
		echo $usuario->agregarUsuario($datos);
	}
?>