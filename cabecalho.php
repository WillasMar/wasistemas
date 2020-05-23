<?php

	require 'sessao.php';

	$recepcao = "Bem vindo, ".strtoupper($_SESSION['nome'])."!";
	$img = $_SESSION['nome'][0];//salva primeira letra
	
	if(isset($_SESSION['img']) && !empty($_SESSION['img'])){
		$img = $_SESSION['img'];
	}	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" id="viewport" name="viewport" content="width=device-width, user-scalable=no">
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
					<li class="active" data-tag="home.php">Home</li>
					<div class="barra"></div>
					<li data-tag="cadastros.php">Cadastros</li>
					<div class="barra"></div>
					<li data-tag="movimentacao.php">Movimentação</li>
				</ul>
			</nav>
			<div class="usuario col">
				<div class="recepcao">
					<div class="usuarioInt" id="usuarioInt">
						<div class="usuarioIntItens">
							<div class="img"><?php echo $img; ?></div>
							<div class="nome"><?php echo $_SESSION['nome']?></div>
							<div class="tgConfig" id="tgConfig"></div>
						</div>							
						<div id="tgMenu" data-status="off">	
						</div>					
					</div>				
					<div class="sair"><a href="sair.php" class="btn btn-danger">Sair</a></div>					
				</div>
			</div>
		</div>
	</header>

	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/cabecalho.js"></script>
</body>
</html>