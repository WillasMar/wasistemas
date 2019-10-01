<?php

	session_start();
	require "conexao.php";
	$retorno = "";

	if((isset($_POST['nome']) && !empty($_POST['nome'])) && (isset($_POST['senha']) && !empty($_POST['senha']))){
		$nome = addslashes($_POST['nome']);
		$senha = md5(addslashes($_POST['senha']));

		$sql = 'select * from usuarios where nome = :nome and senha = :senha';
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":nome",$nome);
		$sql->bindValue(":senha",$senha);
		$sql->execute();

		if($sql->rowCount() > 0){
			$usuarios = $sql->fetch();
			$_SESSION['usuario'] = $usuarios['USUARIO'];
			$_SESSION['nome'] = $usuarios['NOME'];
			header("Location: index.php");
		}else{
			$retorno = "<div class='retorno alert alert-danger alert-dismissible' role='alert'>Usuário ou senha inválida!
			<button class='close' data-dismiss='alert' aria-label='Fechar'>
				<span id='fecharAviso' aria-hidden='true'>&times;</span>
			</button>
		</div>"; 
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" content="width=device-width, user-scalable=no">
	<title>WA Sistemas | Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>
	<form method="POST">
		<div class="logo">
			<img src="assets/img/logo.png">
			<h1>WA Sistemas</h1>
		</div>
		<div class="row linha linha1">
			<div class="col">
				<input class="form-control" type="text" name="nome" id="nome" autofocus required placeholder="Usuário">
			</div>
		</div>
		<div class="row linha linha2">
			<div class="col">
				<input class="form-control" type="password" name="senha" required placeholder="Senha">
			</div>
		</div>
		<div class="row linha botoes">
			<div class="col">
				<input class="form-control btn btn-primary" type="submit" value="Entrar">
			</div>
		</div>

		<?php echo $retorno; ?>
			
	</form>

	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/login.js"></script>
</body>
</html>