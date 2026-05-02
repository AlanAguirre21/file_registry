<?php
	session_start();

	require_once "../../classes/Categorias.php";

	$datos = array(
		"idUsuario" => $_SESSION['idUsuario'],
		"categoria" => $_POST['categoria']
		);

	//echo ("<script>console.log(".$datos['idUsuario'].", ".$datos['categoria'].");</script>");

	$Categorias = new Categorias();
	echo $Categorias->agregarCategoria($datos);
?>