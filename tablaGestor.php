<?php
	session_start();
	require_once "classes/conexionBD.php";
	
	$c = new Conectar();
	$conexion = $c->conexion();
	$idUsuario = $_SESSION['idUsuario'];
	$sql = "SELECT 
			    archivos.id_archivo AS idArchivo,
			    usuarios.nombre_usuarios AS nombreUsuario,
			    categorias.nombre AS categoria,
			    archivos.nombre AS nombreArchivo,
			    archivos.tipo AS tipoArchivo,
			    archivos.fecha AS fecha,
			    archivos.ruta AS rutaArchivo,
			    archivos.recibo AS recibo
			FROM
	    		archivos
	        		INNER JOIN
	    		usuarios ON archivos.id_usuario = usuarios.id_usuarios
	        		INNER JOIN
	    		categorias ON archivos.id_categoria = categorias.id_categoria
	        	AND archivos.id_usuario = '$idUsuario'";
	$result = mysqli_query($conexion, $sql);
?>

<div class="row">
	<div class="col-sm-12">
		<div class="table-responsive">
			<table border=1 id='tablaGestorDataTable' class='table table-striped table-bordered table-hover'>
				<thead>
					<tr>
						<th class="text-center">No.</th>
						<th class="text-center">Fecha</th>
						<th class="text-center">Recibo</th>
						<th class="text-center">Nombre</th>
						<th class="text-center">Visualizaci&oacute;n</th>
						<th class="text-center">Descargar</th>
						<th class="text-center">Eliminar</th>
					</tr>
				</thead>
				<tbody>
				<?php
					while($mostrar = mysqli_fetch_array($result)) { 
						$rutaDescarga = "archivos/".$idUsuario."/".$mostrar['nombreArchivo'];
						$nombreArchivo = $mostrar['nombreArchivo'];
						$idArchivo = $mostrar['idArchivo'];
				?>
					<tr>
						<td><?php echo $mostrar['idArchivo']; ?></td>
						<td><?php echo $mostrar['fecha']; ?></td>
						<td><?php echo $mostrar['recibo']; ?></td>
						<td><?php echo $mostrar['nombreArchivo']; ?></td>
						<td></td>
						<td class="text-center">
							<a href="<?php echo $rutaDescarga; ?>" download="<?php echo $nombreArchivo; ?>" class="btn btn-info btn-sm">
								<span class="text-light">
									<i class="bi bi-arrow-down-square"></i>
									Descargar Archivo
								</span>
							</a>
						</td>

						<td class="text-center">
							<span class="badge bg-danger text-light" onclick="eliminarArchivo('<?php echo $idArchivo ?>')">
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
		$('#tablaGestorDataTable').DataTable();
	});
	$(document).ready(function(){
		$('#tablaGestorDataTable').DataTable();
	});
</script>

