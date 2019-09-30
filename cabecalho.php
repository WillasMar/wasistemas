<?php

	$recepcao = "Bem vindo, ".strtoupper($_SESSION['nome'])."!";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" id="viewport" name="viewport" content="width=device-width, user-scalable=no">
	<title>WA Sistema</title>
	<link rel="stylesheet" type="text/css" href="assets/css/cabecalho.css">
</head>
<body>
	<header>
		<figure class="logo">
			<h1>WA Sistemas</h1>
		</figure>
		<div>
			<?php echo $recepcao; ?>
		</div>
		<nav>
			<ul>
				<li class="active" data-tag="home">Home</li>
				<div class="barra"></div>
				<li data-tag="cadastros">Cadastros</li>
				<div class="barra"></div>
				<li><a href="sair.php">Sair</a></li>
			</ul>
		</nav>
		</div>
	</header>

	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/cabecalho.js"></script>
</body>
</html>