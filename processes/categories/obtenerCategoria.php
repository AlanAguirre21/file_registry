<?php
	session_start();
	require_once "../../classes/Categorias.php";
	$Categorias = new Categorias();

	echo json_encode($Categorias->obtenerCategoria($_POST['idCategoria']));
?>