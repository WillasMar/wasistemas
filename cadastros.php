<?php

	//require "sessao.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" id="viewport" name="viewport" content="width=device-width, user-scalable=no">
	<title>WA Sistema | Cadastro Cliente</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/cadastros.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
	<div class="row cadastros">
		<ul class="">
			<a href="cadastro_cliente.php" target="_blank">
				<li class="cadastro">
					<div class="img">
						<img src="assets/img/inserir.png">
					</div>
					<div class="descricao">
						cliente
					</div>
				</li>
			</a>
			<a href="cadastro_fornecedor.php" target="_blank">
				<li class="cadastro">
					<div class="img">
						<img src="assets/img/inserir.png">
					</div>
					<div class="descricao">
						fornecedor
					</div>
				</li>
			</a>
			<a href="cadastro_usuario.php" target="_blank">
				<li class="cadastro">
					<div class="img">
						<img src="assets/img/inserir.png">
					</div>
					<div class="descricao">
						usuario
					</div>
				</li>
			</a>
		
		</ul>
		<table class="table col" id="myTable">
			<thead class="thead-dark">
				<tr>
					<th>Cod</th>
					<th>Nome</th>
					<th>Razao</th>
					<th>CPF</th>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</body>
</html>