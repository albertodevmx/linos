<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Linos</title>
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<script src="https://kit.fontawesome.com/ed16a084b6.js" crossorigin="anonymous"></script>

	<link rel="preload" href="../node_modules/swiper/swiper-bundle.css" as="style">
	<link rel="preload" href="../node_modules/flickity/dist/flickity.min.css" as="style">


	<link rel="stylesheet" href="./style.css">
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark fixed-top mi-navbar">
		<a class="navbar-brand" href="index.php">
			<img src="./img/logotipo.png" alt="" id="logotipo-menu" class="mi-navbar__logotipo" class="heigth: 260px!important; position: absolute;">
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto menu">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Banquetes
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="banquetes.php">Banquetes</a>
						<a class="dropdown-item" href="cocinados-al-momento.php">Cocinados al momento</a>
						<a class="dropdown-item" href="a-domicilio.php">A domicilio, ya cocinados</a>
					</div>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="platillos-japoneses.php">Comida japonesa</a>
				</li>

				<!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="comida-japonesa.php">Comida japonesa</a>
						<a class="dropdown-item" href="menus-japoneses.php">Menús</a>
						<a class="dropdown-item" href="">Platillos</a>
					</div>
				</li> -->

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Experiencia Linos
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="experiencia-linos-servicios.php">Servicios</a>
						<a class="dropdown-item" href="experiencia-linos.php">Galeria de experiencias</a>
						<a class="dropdown-item" href="experiencia-linos-montaje.php">Montaje</a>
						<!-- <a class="dropdown-item" href="experiencia-linos-eventos.php">Eventos</a>
						<a class="dropdown-item" href="politicas-y-reservaciones.php">Política de servicio</a> -->
					</div>
				</li>


				<!--
				<li class="nav-item">
					<a class="nav-link" href="empresarial.php">Empresarial</a>
				</li>
				-->

				<!-- <li class="nav-item linea-roja"> -->
				<li class="nav-item">
					<a class="nav-link" href="pedidos.php">Pedidos</a>
				</li>
			</ul>
		</div>
	</nav>