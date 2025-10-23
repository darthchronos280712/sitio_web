<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	@yield('pestaña')
	<title>Página de Altata, Culiacán</title>
	<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/8743/8743996.png" type="image/x-icon" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet" />
	<style>
		body {
			background-color: #f8f9ff;
			color: #333;
			font-family: 'Roboto', sans-serif;
			line-height: 1.6;
		}
		.navbar {
			background-color: #007bff !important;
			box-shadow: 0 4px 12px rgba(0, 123, 255, 0.15);
			border-radius: 50px;
			padding: 0.5rem 1rem;
		}
		.navbar-nav .nav-link {
			color: #fff !important;
			font-weight: 400;
			padding: 0.75rem 1.5rem;
			border-radius: 25px;
			transition: background-color 0.3s ease, color 0.3s ease;
		}
		.navbar-nav .nav-link:hover {
			color: #e9ecef !important;
			background-color: rgba(255, 255, 255, 0.1);
		}
		.content-card {
			background-color: #ffffff;
			border: 1px solid #dee2e6;
			box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
			border-radius: 15px;
			transition: transform 0.3s ease, box-shadow 0.3s ease;
			overflow: hidden;
		}
		.content-card:hover {
			transform: translateY(-8px);
			box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
		}
		.content-card h2 {
			color: #007bff;
			font-weight: 700;
			margin-bottom: 1rem;
		}
		.sidebar {
			background-color: #e3f2fd;
			border: 1px solid #bee5eb;
			box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
			border-radius: 15px;
			overflow-y: auto;
			height: 700px;
			padding: 1.5rem;
		}
		.sidebar p {
			font-size: 0.95rem;
			text-align: justify;
		}
		.hero-section {
			background: linear-gradient(135deg, #007bff, #00bfff);
			color: #fff;
			padding: 4rem 0;
			border-radius: 0 0 50px 50px;
			margin-bottom: 2rem;
		}
		.hero-section h1 {
			font-weight: 300;
			font-size: 3.5rem;
			text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
		}
		img {
			border-radius: 10px;
			transition: transform 0.3s ease;
			margin-top: 1rem;
		}
		img:hover {
			transform: scale(1.05);
		}
		@media (max-width: 768px) {
			.navbar {
				width: 100% !important;
				border-radius: 0;
			}
			.container {
				max-width: 100% !important;
				padding: 0 1rem;
			}
			.hero-section h1 {
				font-size: 2.5rem;
			}
			.sidebar {
				height: auto;
				margin-top: 1rem;
			}
		}
	</style>
</head>
<body>
	<div class="py-5 text-center hero-section">
		>@yield('titulo)
		<h1>Altata, Culiacán</h1>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark rounded mx-auto" style="width: 80%;">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link active" href="index.html">Presentación</a></li>
					<li class="nav-item"><a class="nav-link" href="caracteristicas.html">Características</a></li>
					<li class="nav-item"><a class="nav-link" href="historia.html">Historia</a></li>
					<li class="nav-item"><a class="nav-link" href="ubicacion.html">Ubicación</a></li>
					<li class="nav-item"><a class="nav-link" href="formulario.html">Formulario</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<!-- Sección Presentación -->
	<div class="container my-5" style="max-width: 80%;">
		@yield('contenido')
		<div class="row">
			<div class="col-lg-8">
				<div class="mb-4 p-3 content-card rounded">
					<h2>Altata</h2>
					<p>¡Bienvenido a Altata, un paraíso costero en el municipio de Navolato, cerca de Culiacán, Sinaloa! Conocido por sus hermosas playas, lagunas y mariscos frescos.</p>
					<img src="https://revistaespejo.com/wp-content/uploads/2024/11/Altata-Malecon-puestos-2024-24.jpg" 
						alt="Altata" class="img-fluid rounded" style="max-width: 200px;" />
				</div>
			</div>
			<div class="col-lg-4">
				<div class="p-3 sidebar rounded" style="height: 700px;">
					<p>Altata es un pueblo pesquero encantador en Sinaloa, México, famoso por su tranquilidad y bellezas naturales. Ubicado a unos 30 km de Culiacán, ofrece playas vírgenes como la de Altata y la Isla del Pacífico. La economía se basa en la pesca y el turismo, con festivales como el de la Virgen del Mar. Disfruta de paseos en lancha por la laguna, donde puedes observar delfines y garzas. ¡Ven y descubre el sabor del mar sinaloense!</p>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
