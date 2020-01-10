<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>CRUD DE USUARIOS</title>
		<link href="web/css/default.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="web/js/funciones.js"></script>
		<script type="text/javascript" src="web/js/jquery.js"></script>
		<script type="text/javascript" src="web/js/funcionesJQUERY.js"></script>
		<link rel="stylesheet" type="text/css" media="all and (min-width: 475px)" href="web/css/tablet.css"/>
		<link rel="stylesheet" type="text/css" media="all and (min-width: 725px)" href="web/css/pc.css"/>
		<link rel="icon" type="image/png" href="web/img/favicono.ico"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
		<meta name="HandheldFriendly" content="true"/>
		<meta name="apple-mobile-web-app-capable" content="YES"/>
		<meta name="description" content="Disco web">
		<meta name="author" content="Alberto Fernández Gálvez y Jorge Muñoz Feito">
		<meta name="keywords" content="Nube, disco, almacenamiento, web, archivo">
	</head>
	<body>
		<main id="container">
			<header id="header">
				<h1>MI DISCO EN LA NUBE</h1><h2>- Modelo 1.0 -</h2>
			</header>
			<section id="content">
				<?= $contenido ?>
			</section>
		</main>
		<footer id="piePagina">
			<li>Alberto Fernández Gálvez</li>
			<li>albertofer1997@gmail.com</li>
			<br>
			<li>Jorge Muñoz Feito</li>
			<li>jomufe7@gmail.com</li>
			<br>
		</footer>
	</body>
</html>