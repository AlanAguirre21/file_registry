<?php
	
	require_once "conexionBD.php";

	class Gestor extends Conectar{
		public function agregarRegistroArchivo($datos) {
			$conexion = Conectar::conexion();
			$sql = "INSERT INTO archivos (id_categoria,
											id_usuario,
											nombre,
											recibo,
											tipo,
											ruta) 
										VALUES (?, ?, ?, ?, ?, ?)";
			$query = $conexion->prepare($sql);
			$query->bind_param("iissss", $datos["idCategoria"],
										$datos["idUsuario"],
										$datos["nombreArchivo"],
										$datos["recibo"],
										$datos["tipo"],
										$datos["ruta"]);
			$respuesta = $query->execute();
			$query->close();
			return $respuesta;
		}
	}

?>