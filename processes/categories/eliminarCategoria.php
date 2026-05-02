<?php
	session_start();
	require_once "../../classes/Categorias.php";
	$Categorias = new Categorias();

	echo $Categorias->eliminarCategoria($_POST['idCategoria']);
?>