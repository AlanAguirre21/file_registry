<?php
session_start();
	
	if (isset($_SESSION['usuario'])){
		include "header.php";
	?>
		<main id="main" class="main">
			<div class="pagetitle text-center">
					<h1 class="fw-bold fs-1">File Registry</h1>
			</div>

			<hr>
			<section class="section">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-8 mx-auto">
							<div class="card-body">
								<p class="fs-5 lh-lg">Este proyecto "File Registry" tiene la finalidad de funcionar como un gestor de archivos para digitalizar documentos y registros inecesariamente físicos, que ahora, con tecnología como la de aplicaciones web, es mucho más fácil de organizar y almacenar, para acceder cómodamente.</p>
								<img class="mx-auto d-block" src="assets\img\file-folders-background.webp" width="60%">
								<p class="fs-5 lh-lg">File Registry puede organizar los archivos en la categoría que sea necesaria; además de ofrecer la posibilidad de modificar o eliminar las categorías.</p>
								<p class="fs-5 lh-lg">Referente a los registros/archivos, estos se pueden subir asignandoles una categoría y un recibo, en el cual se puede describir el origen o la función del archivo. Además se ofrece la posibilidad de subirlos al servidor teniendo la posibilidad de visualizar, descargar o eliminar el archivo en cuestión, según sea necesario.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main><!-- End #main -->
<?php
		include "footer.php";
	} else {
		header("location:index.php");
	}
?>