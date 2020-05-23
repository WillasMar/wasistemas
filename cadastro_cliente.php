<?php

	require "sessao.php";
	require "conexao.php";
	require "assets/class/cliente.class.php";

	$Cliente = new Cliente($pdo);
	$retorno = "";

	if(isset($_POST['nome']) && !empty($_POST['nome'])){
		$nome = addslashes($_POST['nome']);
		$razao = addslashes($_POST['razao']);
		$radio = addslashes($_POST['radioCgc']);
		$cpf = '';
		$cnpj = '';
		
		//verifica se vai gravar cpf ou cnpj
		switch($radio){
			case "radioCpf":
				$cpf = addslashes($_POST['cgc']);
				break;
			case "radioCnpj":
				$cnpj = addslashes($_POST['cgc']);
				break;
			default:
				break;
		}
		
		$retorno = $Cliente->Insert($nome,$razao,$cpf,$cnpj);	

		/*teste de envio do submit
		echo "<pre>";
		print_r($_POST);
		echo "CPF: ".$cpf."<br>";
		echo "CNPJ: ".$cnpj."<br>";
		echo "</pre>";
		*/

	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" id="viewport" name="viewport" content="width=device-width, user-scalable=no">
	<title>WA Sistema | Cadastro Cliente</title>
	<link rel="stylesheet" type="text/css" href="assets/css/cadastro_cliente.css">
</head>
<body>
	<header>
		<div class="titulo area">
			<h1>Cadastro de Clientes</h1>
		</div>
	</header>
	<?php
		echo "<p>".$retorno."</p>";
	?>
	<div class="container">		
		<form method="POST" class="area">
			<div class="grupo grupo1">
				<!--Nome, Razão Social-->
				<div class="grupoInt descricao">
					<div class="nome">
						<label>Nome</label>
						<input type="text" name="nome" autofocus>
					</div>
					<div class="razao">
						<label>Razão Social</label>
						<input type="text" name="razao">
					</div>
				</div>
				<!--ID, CPF, CNPJ, CGC-->
				<div class="grupoInt id">
					<div class="codigo">
						<input type="text" name="id" id="id" disabled>
					</div>					
					<div class="cgc">
						<div class="radio">
							<div class="cpf">
								<input type="radio" name="radioCgc" id="radioCpf" value="radioCpf" checked>
								<label for="radioCpf">CPF</label>
							</div>
							<div class="cnpj">
								<input type="radio" name="radioCgc" id="radioCnpj" value="radioCnpj">
								<label for="radioCnpj">CNPJ</label>
							</div>
						</div>
						<div class="texto">
							<input type="text" name="cgc" id="cgc">
						</div>
					</div>
				</div>
			</div>			
			<div class="grupo grupo2">
				<!--CEP, Logradouro, Nª-->
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
				<!--Bairro, Cidade, UF-->
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
						<label for="uf">UF</label>
						<select name="uf" id="uf" class="">
							<option value=""></option>
							<option value="AC">AC</option>
							<option value="AL">AL</option>
							<option value="AP">AP</option>
							<option value="AM">AM</option>
							<option value="BA">BA</option>
							<option value="CE">CE</option>
							<option value="DF">DF</option>
							<option value="ES">ES</option>
							<option value="GO">GO</option>
							<option value="MA">MA</option>
							<option value="MT">MT</option>
							<option value="MS">MS</option>
							<option value="MG">MG</option>
							<option value="PA">PA</option>
							<option value="PB">PB</option>
							<option value="PR">PR</option>
							<option value="PE">PE</option>
							<option value="PI">PI</option>
							<option value="RJ">RJ</option>
							<option value="RN">RN</option>
							<option value="RS">RS</option>
							<option value="RO">RO</option>
							<option value="RR">RR</option>
							<option value="SC">SC</option>
							<option value="SP">SP</option>
							<option value="SE">SE</option>
							<option value="TO">TO</option>
							<option value="EX">EX</option>
						</select>
					</div>
				</div>
			</div>
			<!--contatos, observação-->			
			<div class="grupo grupo3">
				<!--contatos-->
				<div class="grupoInt contato">
					<div class="telefone">
						<label>Telefone</label>
						<input type="text" name="telefone" id="telefone">
					</div>
					<div class="celular">
						<label>Celular</label>
						<input type="text" name="celular" id="celular">
					</div>
				</div>
				<!--observação-->
				<div class="grupoInt obs">
					<label>Observação</label>
					<textarea></textarea>
				</div>
			</div>
			<!--campos ocultos-->
			<input type="text" name="tabela" value="CLIENTES" hidden>
			<input type="text" name="acao" value="insert" hidden>
			<!--botões-->
			<div class="grupo botoes">
				<input type="submit" value="Salvar">
			</div>
		</form>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.mask.js"></script>
	<script type="text/javascript" src="assets/js/cadastro_cliente.js"></script>
</body>
</html>