<?php

	require "sessao.php";
	require "conexao.php";
	require "assets/class/cliente.class.php";

	$clientes = new Cliente($pdo);

	$clientesList = $clientes->select();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" id="viewport" name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/cadastros.css">
</head>
<body>
	<div class="container-fluid cadastros">
		<div class="row cabecalho">
			<div class="col">clientes</div>
		</div>
		<div class="row conteudo">
			<ul class="">
				<a href="cadastro_cliente.php" target="_blank">
					<li class="cadastro ativo">
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
			<table class="table col table-hover" id="tabelaCadastros">
				<thead class="thead-light">
					<tr>
						<th>Cod</th>
						<th>Nome</th>
						<th>Razao</th>
						<th>CPF</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if($clientesList != false){
							foreach ($clientesList as $clientesItem): ?>
								<tr>
									<td><?php echo str_pad($clientesItem['id'],6,'0',STR_PAD_LEFT); ?></td>
									<td><?php echo $clientesItem['nome']; ?></td>
									<td><?php echo $clientesItem['razao']; ?></td>
									<td><?php echo $clientesItem['cpf']; ?></td>
								</tr>						
							<?php endforeach; 
						} 
					?>
				</tbody>
			</table>
		</div>		
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/cadastros.js"></script>
</body>
</html>