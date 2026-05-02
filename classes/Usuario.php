<?php
	
	require_once "conexionBD.php";
	
	class Usuario extends Conectar{
		public function agregarUsuario($datos){
			$conexion = Conectar::conexion();
			
			if(self::buscarUsuarioRepetido($datos['username'])){
				return 2;
			} else {
				$sql = "INSERT INTO usuarios(
						usuario_usuarios,
						nombre_usuarios,
						contrasena_usuarios,
						apellido_usuarios,
						rol_usuarios
				) VALUES (?, ?, ?, ?, ?)";
				
				$query = $conexion->prepare($sql);
				$query->bind_param('ssssi',	$datos['username'],
											$datos['user_firstname'],
											$datos['password'],
											$datos['user_lastname'],
											$datos['user_rol']);
				$exito = $query->execute();
				$query->close();
				return $exito;
			}
		}
		
		public function buscarUsuarioRepetido($usuario) {
			$conexion = Conectar::conexion();
			
			$sql = "SELECT usuario_usuarios 
					FROM usuarios 
					WHERE usuario_usuarios = '$usuario'";
			$result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);
			
			if ($datos && (!empty($datos['usuario_usuarios']) || $datos['usuario_usuarios'] == $usuario)){
				return 1;
			} else {
				return 0;
				}
		}
		
		public function login($usuario, $password) {
			$conexion = Conectar::conexion();

			// 1. Consulta el hash del usuario
			$sql = "SELECT id_usuarios, contrasena_usuarios
					FROM usuarios 
					WHERE usuario_usuarios = '$usuario'";

			$result = mysqli_query($conexion, $sql);

			if ($result && mysqli_num_rows($result) == 1) {
				$fila = mysqli_fetch_assoc($result);
				$hash = $fila['contrasena_usuarios'];

				// 2. Verifica la contraseña con password_verify
				if (password_verify($password, $hash)) {
					// Contraseña correcta
					$_SESSION['usuario'] = $usuario;
					$_SESSION['idUsuario'] = $fila['id_usuarios'];
					return 1;
				}
			}
			// Usuario no existe o contraseña incorrecta
			return 0;
		}

			
	}
		

?>