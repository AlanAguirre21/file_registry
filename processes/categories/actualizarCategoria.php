<?php
	session_start();
	require_once "../../classes/Categorias.php";
	$Categorias = new Categorias();

	$datos = array(
		"idCategoria" => $_POST['idCategoria'],
		"nombreCategoria" => $_POST['categoriaU']
	);

	echo $Categorias->actualizarCategoria($datos);

?>