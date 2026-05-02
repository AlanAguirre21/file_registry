<?php
	session_start();

	require_once "../../../classes/Usuario.php";
	
	$usuario = $_POST['username'];
	$password = $_POST['password'];
	
	$usuarioObj = new Usuario();


	echo $usuarioObj->login($usuario, $password);
	
?>