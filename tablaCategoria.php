<?php
	session_start();
	require_once "classes/conexionBD.php";

	$idUsuario = $_SESSION['idUsuario'];
	$conexion = new Conectar();
	$conexion = $conexion->conexion();

?>
<div class="row">
	<div class="col-sm-12">
		<div class="table-responsive">
			<table border=1 id='tablaCategoriaDataTable' class='table table-striped table-bordered table-hover'>
				<thead>
					<tr>
						<th class="text-center">Nombre</th>
						<th class="text-center">Fecha</th>
						<th class="text-center">Editar</th>
						<th class="text-center">Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql = "SELECT id_categoria,
										nombre, 
										fechaInsert
								FROM categorias 
								WHERE id_usuario = '$idUsuario'";

						$result = mysqli_query($conexion, $sql);

						while($mostrar = mysqli_fetch_array($result)){
							$idCategoria = $mostrar['id_categoria'];
					?>
					<tr class="text-center">
						<td><?php echo $mostrar['nombre'] ?></td>
						<td class="text-center"><?php echo $mostrar['fechaInsert'] ?></td>
						
						<td class="text-center">
							<div>
								<span class="badge bg-warning text-dark"
									onclick="obtenerDatosCategoria('<?php echo $idCategoria ?>')"
									data-bs-toggle="modal" data-bs-target="#modalEditarCategoria">
									<i class="bi bi-pencil-square"></i>
									Modificar
								</span>
							</div>
						</td>

						<td class="text-center">
							<span class="badge bg-danger text-light"
								onclick="eliminarCategoria('<?php echo $idCategoria ?>')">
								<i class="bi bi-trash"></i>
								Eliminar
							</span>
						</td>

					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaCategoriaDataTable').DataTable();
	});
</script>
