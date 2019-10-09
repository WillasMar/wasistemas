<?php

	session_start();
	$recepcao = "Bem vindo, ".strtoupper($_SESSION['nome'])."!";

	if ($_SESSION['IMG'] != '') {
		$img = $_SESSION['IMG'];
	}else{
		$img = 'U';
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" id="viewport" name="viewport" content="width=device-width, user-scalable=no">
	<title>WA Sistema</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/cabecalho.css">
</head>
<body>
	<header class="container">
		<div class="row align-items-center">
			<figure class="logo">
				<img src="assets/img/HCWeb_logo.png">
			</figure>
			<nav class="col">
				<ul>
					<li class="active" data-tag="home">Home</li>
					<div class="barra"></div>
					<li data-tag="cadastros">Cadastros</li>
					<div class="barra"></div>
					<li>Movimentação</li>
				</ul>
			</nav>
			<div class="usuario col">
				<div class="recepcao">
					<div class="img"><?php echo $img; ?></div>
					<div class="msg"><?php echo $recepcao; ?></div>
					<a href="sair.php">Sair</a>
				</div>
			</div>
		</div>
	</header>

	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/cabecalho.js"></script>
</body>
</html>