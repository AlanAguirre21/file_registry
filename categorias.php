<?php
session_start();
	
	if (isset($_SESSION['usuario'])){
		include "header.php";
	?>
		<main id="main" class="main">
			<div class="pagetitle">
				<h1 class="fw-bold fs-1">Categorias</h1>
			</div>

			<div class="col-sm-4">
				<span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregaCategoria">
					<span class="bi bi-plus-square"></span> Agregar nueva categoria
				</span>
			</div>
			<hr>

			<section class="section">
				<div class="row">	  
					<div class="card recent-sales overflow-auto"><br>
						<div id="tablaCategorias"></div>
					</div>
				</div>
			</section>
		</main>

		<!-- Modal: Agregar Categoría-->
		<div class="modal fade" id="modalAgregaCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
			<div class="modal-dialog modal-sm">
				<div class="modal-content">

					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Agregar nueva categoría</h5>
						<!-- Botón de cierre actualizado -->
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
					</div>

					<div class="modal-body">
						<form id="frmCategorias" class="needs-validation">
							<label class="form-label">Nombre de la categoría</label>
							<input type="text" id="nombreCategoria" class="form-control">
						</form>
					</div>

					<div class="modal-footer">
						<!-- Atributos data-bs-dismiss en lugar de data-dismiss -->
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
						<button type="button" class="btn btn-primary" id="btnGuardarCategoria">Guardar</button>
					</div>

				</div>
			</div>
		</div>

		<!-- Modal: Editar Categoría -->
		<div class="modal fade" tabindex="-1" role="dialog" id="modalEditarCategoria" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">

					<div class="modal-header">
						<h5 class="modal-title">Actualizar categoría</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
					</div>

					<div class="modal-body">
						<form id="frmActualizarCategoria" class="needs-validation">
							<input type="text" id="idCategoria" name="idCategoria" hidden="true">
							<label class="form-label">Nombre de la categoría</label>
							<input type="text" id="categoriaU" name="categoriaU" class="form-control">
						</form>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" 
							id="btnCerrarUpdateCategoria">Cerrar</button>			
						<button type="button" class="btn btn-warning" id="btnActualizarCategoria">Guardar cambios</button>
					</div>
				</div>
			</div>
		</div>

		<?php
			include "footer.php";
		?>
		<!--Dependencia de categorias, todas las funciones de js de categorias-->
		<script src="assets/js/categorias.js"></script>
		<script src="assets/js/dataTable.js"></script>
		<script type="text/javascript">

			$(document).ready(function(){
				$('#tablaCategorias').load("tablaCategoria.php", function () {

		    		// Aquí inicializas DataTable para la tabla con el ID #tablaGestorDataTable
					inicializarDataTable("#tablaCategoriaDataTable");
					});

				$('#btnGuardarCategoria').click(function(){
					agregarCategoria();
				});

				$('#btnActualizarCategoria').click(function(){
					actualizarCategoria();
				});
			});
		</script>
<?php
	} else {
		header("location:index.php");
	}
?>