<?php
	session_start();
	require_once "../../classes/Gestor.php";

	$Gestor = new Gestor();

	$idCategoria = $_POST['categoriasArchivos'];
	$idUsuario = $_SESSION['idUsuario'];
	$recibo = $_POST['reciboRegistro'];

	//$total = count($_FILES['archivos']['name']);

	if($_FILES['archivos']['size'] > 0){
		
		$carpetaUsuario = '../../archivos/'.$idUsuario.'/';

		if(!file_exists($carpetaUsuario)){
			mkdir($carpetaUsuario, 0777, true);
			//echo "<script>console.log(\"CarpetaUsuario Creada exitosamente!\")</script>";
		}

		$total = count($_FILES);
		for ($i=0; $i < $total; $i++) {

			$nombreArchivo = $_FILES['archivos']['name'][$i];
			$explode = explode('.', $nombreArchivo);
			$tipoArchivo = array_pop($explode);
			$rutaAlmacenamiento = $_FILES['archivos']['tmp_name'][$i];
			$rutaFinal = $carpetaUsuario.$nombreArchivo;

			$datosRegistroArchivo = array(
									"idCategoria" => $idCategoria,
									"idUsuario" => $idUsuario,
									"nombreArchivo" => $nombreArchivo,
									"recibo" => $recibo,
									"tipo" => $tipoArchivo,
									"ruta" => $rutaFinal
										);

			if (move_uploaded_file($rutaAlmacenamiento, $rutaFinal)) {
				$respuesta = $Gestor->agregarRegistroArchivo($datosRegistroArchivo);
			};
		}
		echo $respuesta;
	} else {
		echo 0;
	}
	
?>