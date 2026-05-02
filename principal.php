<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		/*
		foreach ($_SESSION as $clave => $valor) {
        echo "<script>console.log('{$clave}: " . addslashes($valor) . "');</script>";
    	}
    	*/
		include "header.php"; 
?>

		<main id="main" class="main">
			<div class="pagetitle">
					<h1 class="fw-bold fs-1">Listado de Registros</h1>
			</div>

			<div class="col-sm-4">
				<span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarArchvios">
					<span class="bi bi-plus-square"></span> Agregar nuevo archivo
				</span>
			</div>

			<hr>
			<section class="section">
				<div class="row">

				<!-- Left side columns -->
					<div class="col-12">
						<div class="row">           

						<!-- Recent Sales -->
							<div class="col-12">

								<div class="card recent-sales overflow-auto"><br>
									<div class="card-body" id="tablaGestorArchivos"></div>
								</div>
							</div>
						</div>
					</div><!-- End Left side columns -->

				</div>
			</section>

		</main><!-- End #main -->

		<!---------MODAL AGREGAR ARCHIVOS------------->
		<div class="modal fade" id="modalAgregarArchvios" tabindex="-1" aria-labelledby="exampleModalLabel">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel">Agregar nuevo archivo</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

					<div class="modal-body">
						<form id="frmArchivos" name="frmArchivos" enctype="multipart/form-data" class="needs-validation" method="POST">
							<div class="divFrmArchivos">
								<label class="form-label">Categoría</label>
								<div id="categoriasLoad"></div>
								<label class="prube-label">Recibo del registro</label>
								<input type="text" name="reciboRegistro" id="reciboRegistro" class="form-control">

								<div class="fileType">
									<input class="form-control" type="file" name="archivos[]" id="archivos" multiple>
									<!--
									<input class="form-control" type="file" name="adjuntos" id="adjuntos">
									-->
								</div>
							</div>
						</form>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
						<button type="button" class="btn btn-primary" id="btnGuardarArchivos">Agregar</button>
					</div>

				</div>
			</div>
		</div>

<?php include "footer.php"; ?>
		<script src="assets/js/dataTable.js"></script>
		<script src="assets/js/gestor.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#tablaGestorArchivos').load("tablaGestor.php", function () {

		    		// Aquí inicializas DataTable para la tabla con el ID #tablaGestorDataTable
					inicializarDataTable("#tablaGestorDataTable");

				});
				$('#categoriasLoad').load("vistas/categorias/selectCategorias.php");
				$('#btnGuardarArchivos').click(function(){
					agregarArchivosGestor();
				});
				
			});
		</script>

<?php
		} else {
			header("location:index.php");
		}
?>