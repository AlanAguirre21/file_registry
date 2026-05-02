<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>FileRegistry-Principal</title>
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
	
	<link href="assets/css/css.dataTables.min.css" rel="stylesheet">
	
	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
	
	<!-- ======= Header ======= -->
	
	<header id="header" class="header fixed-top d-flex align-items-center px-3">

		<div class="d-flex align-items-center justify-content-between container-fluid">
			<a href="inicio.php" class="logo d-flex align-items-center">
				<img src="assets/img/logo.png" alt="">
				<span class="d-none d-lg-block">FileRegistry</span>
			</a>
			<!--<i class="bi bi-list toggle-sidebar-btn"></i>-->
			<!-- End Logo -->
		
			<nav class="navbar navbar-expand-lg ms-auto">
				<ul class="nav d-flex gap-3">
					<li class="nav-item">
						<a class="nav-link" href="inicio.php">
							<i class="bi bi-house-door"></i> <span>Home</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="categorias.php">
							<i class="bi bi-file-earmark-text"></i> <span>Categorias</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="principal.php">
							<i class="bi bi-gear"></i> <span>Administrar</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-danger" href="processes/user/salir.php">
							<i class="bi bi-door-open"></i> <span>Salir</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	<!--
	<nav class="header-nav ms-auto" style="height: 100%; margin-right: 80px;">
		<div style="border: 3px solid #f0f0f0; height: 100%; width: 165%; display: flex; align-items: center; justify-content: center;">
			<span class="nav-item" id="userGreeting" style="padding: 5px 10px; border-radius: 5px; height: 100%; width: 100%; display: flex; align-items: center; justify-content: center; text-align: center;">
			</span>
		</div>
	</nav>
	-->
	</header><!-- End Header -->

  <!-- ======= Sidebar ======= 
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="principal.php">
          <i class="bi bi-grid"></i>
          <span>Inicio</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
		<ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="alta_registro.html">
              <i class="bi bi-circle"></i><span>Alta</span>
            </a>
          </li>         
        </ul>
      </li> End Dashboard Nav

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i>
		  <span>Registros</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
          </li>
        </ul>
      </li> End Components Nav

      
    </ul>
  </aside>End Sidebar-->