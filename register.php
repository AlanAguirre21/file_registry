<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>FileRegistry-Register</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="assets/css/googleapis.css" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
	<link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
	<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

	<main>
		<div class="container">

			<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

							<div class="d-flex justify-content-center py-4">
								<a href="index.html" class="logo d-flex align-items-center w-auto">
									<img src="assets/img/logo.png" alt="">
									<span class="d-none d-lg-block">FileRegistry</span>
								</a>
							</div><!-- End Logo -->

							<div class="card mb-3">

								<div class="card-body">

									<div class="pt-4 pb-2">
										<h5 class="card-title text-center pb-0 fs-4">Crear cuenta</h5>
										<p class="text-center small">Ingresa los datos que se te solicitan para crear la cuenta</p>
									</div>

								<form id="frmRegistro" class="row g-3 needs-validation" method="POST" onsubmit="return agregarUsuarioNuevo()" novalidate>
									<div class="col-12">
										<label for="user_firstname" class="form-label">Nombre</label>
										<input type="text" name="user_firstname" class="form-control" id="user_firstname" required>
										<div class="invalid-feedback">Ingresa tu nombre!</div>
									</div>

									<div class="col-12">
										<label for="user_lastname" class="form-label">Apellidos</label>
										<input type="text" name="user_lastname" class="form-control" id="user_lastname" required>
										<div class="invalid-feedback">Ingresa tus apellidos!</div>
									</div>

									<div class="col-12">
										<label for="username" class="form-label">Nombre de usuario</label>
										<input type="text" name="username" class="form-control" id="username" required>
										<div class="invalid-feedback">Ingresa un nombre de usuario!</div>
									</div>

									<div class="col-12">
										<label for="user_rol" class="form-label">Rol de usuario</label>
										<div class="input-group has-validation">
											<select type="text" name="user_rol" class="form-control" id="user_rol" required>
												<option value="1">Usuario</option>
												<option value="2">Administrador</option>
											</select>
											<div class="invalid-feedback">Ingresa un nombre de usuario!</div>
										</div>
									</div>

									<div class="col-12">
										<label for="user_password" class="form-label">Contrase&ntilde;a</label>
										<div class="input-group">
											<input type="password" name="user_password" class="form-control" id="user_password" required>
											<button class="btn position-absolute end-0 top-50 translate-middle-y me-2 p-0 border-0 bg-transparent" type="button" id="togglePassword">
												<i class="bi bi-eye"></i>
											</button>
										</div>
									<div class="invalid-feedback">Ingresa una contrase&ntilde;a!</div>
									</div>


									<div class="col-12">
										<button class="btn btn-primary w-100" type="submit">Crear cuenta</button>
									</div>
									<div class="col-12">
										<p class="small mb-0">Ya tienes una cuenta? <a href="index.php">Iniciar sesi&oacute;n</a></p>
									</div>
								</form>

								</div>
							</div>
						</div>
					</div>
				</div>

			</section>

		</div>
	</main><!-- End #main -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="jquery/jquery-3.6.3.min.js"></script>
	<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/chart.js/chart.umd.js"></script>
	<script src="assets/vendor/echarts/echarts.min.js"></script>
	<script src="assets/vendor/quill/quill.min.js"></script>
	<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
	<script src="assets/vendor/tinymce/tinymce.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>
	<script src="assets/js/sweetalert.min.js"></script>

	<script src="assets/js/register.js"></script>
	<script type="text/javascript">
	function agregarUsuarioNuevo() {
		$.ajax({
			method: "POST",
			data: $('#frmRegistro').serialize(),
			url: "processes/user/register/agregarUsuario.php",
			success:function(respuesta){
				respuesta = respuesta.trim();
				
				if (respuesta == 1){
					$("#frmRegistro")[0].reset();
					swal(":D", "Usuario agregado exitosamente!", "success");
				} else if (respuesta == 2){
					swal(":(", "Este usuario ya existe, por favor escribe otro !!", "warning");
				} else {
					swal(":(", "Error al agregar el usuario!", "error");
				};
			}
		});
		return false;
	}
	</script>
</body>
</html>