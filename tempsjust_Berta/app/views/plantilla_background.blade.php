<!DOCTYPE html>

<html>
	<head>
		<title>Pàgina d'inici</title>
		<meta charset="utf-8">
		<script src="../app/views/js/jquery-1.10.2.js"></script>
		<link href="../app/views/css/bootstrap.min.css" rel="stylesheet">
		<link href="../app/views/css/bootstrap-theme.min.css" rel="stylesheet">
		<script src="../app/views/js/bootstrap.min.js"></script>

		{{ HTML::style("../app/views/css/custom.css") }}
		{{ HTML::style("../app/views/css/3-col-portfolio.css") }}
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>

		<header>
			<div id="logo" class="pull-left">Temps Just</div>
			<div class="pull-right">Login</div>
		</header>

		<nav>
			<div id="menu-principal" class="btn-group">
				<button type="button" class="btn btn-default">Inici</button>
			 	<button type="button" class="btn btn-default">Com funciona?</button>
			 	<button type="button" class="btn btn-default">Serveis</button>
				<button type="button" class="btn btn-default">FAQ</button>
			</div>
		</nav>




		<div id="principal-centre">
			@yield('content')
		</div>

		<footer>Dades M3V</footer>
	</body>

</html>