<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Tienda de camisetas</title>
	<link  rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>
	<div id="container">
	<!---CABECERA--->
		<header id="header">
			<div id="logo">
				<img src="assets/img/camiseta.png" alt="Camiseta">
				<a href="index.php">
					<h1>Tienda de camisetas</h1>
				</a>
			</div>
		</header>
	<!-----MENU----->
		<nav id="menu">
			<ul>
				<li>
					<a href="#">
						Inicio
					</a>
				</li>
				<li>
					<a href="#">
						Categoria 1
					</a>
				</li>
				<li>
					<a href="#">
						Categoria 2
					</a>
				</li>
				<li>
					<a href="#">
						Categoria 3
					</a>
				</li>
				<li>
					<a href="#">
						Categoria 4
					</a>
				</li>
				<li>
					<a href="#">
						Categoria 5
					</a>
				</li>
			</ul>
		</nav>

		<div id="content">

		
			<h1>Productos destacados</h1>

			<div class="product">
				<img src="assets/img/camiseta.png">
				<h2>Camiseta Azul Ancha</h2>
				<p>30 euros</p>
				<a href="#" class="button">Comprar</a>
			</div>
			<div class="product">
				<img src="assets/img/camiseta.png">
				<h2>Camiseta Azul Ancha</h2>
				<p>30 euros</p>
				<a href="#" class="button">Comprar</a>
			</div>
			<div class="product">
				<img src="assets/img/camiseta.png">
				<h2>Camiseta Azul Ancha</h2>
				<p>30 euros</p>
				<a href="#" class="button">Comprar</a>
			</div>

		</div>

		<!---FOOTER--->
		<footer id="footer">
			<p>Desarrollado por Álvaro Núñez &copy; <?=date('Y')?></p>
		</footer>
	</div>
</body>
</html>			
