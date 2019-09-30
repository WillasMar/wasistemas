<?php

	//require "sessao.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" id="viewport" name="viewport" content="width=device-width, user-scalable=no">
	<title>WA Sistema | Cadastro Cliente</title>
	<link rel="stylesheet" type="text/css" href="assets/css/cadastro.css">
</head>
<body>
	<header>
		<div class="titulo area">
			<h1>Cadastro de Clientes</h1>
		</div>
	</header>
	<div class="container">		
		<form method="POST" class="area" action="conexao.php">
			<div class="grupo grupo1">
				<div class="grupoInt descricao">
					<div class="nome">
						<label>Nome</label>
						<input type="text" name="nome" autofocus>
					</div>
					<div class="razao">
						<label>Razão Social</label>
						<input type="text" name="razao_social">
					</div>
				</div>
				<div class="grupoInt id">
					<div class="codigo">
						<input type="text" name="cliente" disabled>
					</div>
					<div class="cgc">
						<div class="radio">
							<div class="cpf">
								<input type="radio" name="tipo" value="cpf" checked>
								<label>CPF</label>
							</div>
							<div class="cnpj">
								<input type="radio" name="tipo" value="cnpj">
								<label>CNPJ</label>
							</div>
						</div>
						<div class="texto">
							<input type="text" name="cgc">
						</div>
					</div>
				</div>
			</div>
			<div class="grupo grupo2">
				<div class="grupoInt end1">
					<div class="cep">
						<label>CEP</label>
						<input type="text" name="cep">
					</div>
					<div class="logradouro">
						<label>Logradouro</label>
						<input type="text" name="logradouro">
					</div>
					<div class="numero">
						<label>Nª</label>
						<input type="text" name="numero">
					</div>
				</div>
				<div class="grupoInt end2">
					<div class="bairro">
						<label>Bairro</label>
						<input type="text" name="bairro">
					</div>
					<div class="cidade">
						<label>Cidade</label>
						<input type="text" name="cidade">
					</div>
					<div class="estado">
						<label>UF</label>
						<input type="text" name="estado">
					</div>
				</div>
			</div>
			<div class="grupo grupo3">
				<div class="grupoInt contato">
					<div class="telefone">
						<label>Telefone</label>
						<input type="text" name="telefone">
					</div>
					<div class="celular">
						<label>Celular</label>
						<input type="text" name="celular">
					</div>
				</div>
				<div class="grupoInt obs">
					<label>Observação</label>
					<textarea></textarea>
				</div>
			</div>
			<input type="text" name="tabela" value="CLIENTES" hidden>
			<input type="text" name="acao" value="insert" hidden>
			<div class="grupo botoes">
				<input type="submit" value="Salvar">
			</div>
		</form>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>