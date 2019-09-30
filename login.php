<?php

	session_start();
	require "conexao.php";
	$retorno = '';

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
			$retorno = "Usuário ou senha inválida!"; 
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" content="width=device-width, user-scalable=no">
	<title>WA Sistemas | Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>
	<form method="POST">
		<div class="logo">
			<img src="assets/img/logo.png">
			<h1>WA Sistemas</h1>
		</div>
		<div class="linha linha1">
			<div>
				<span>Usuário:</span>
			</div>
			<div>
				<input type="text" name="nome" autofocus required>
			</div>
		</div>
		<div class="linha linha2">
			<div>
				<span>Senha:</span>
			</div>
			<div>
				<input type="password" name="senha" required>
			</div>
		</div>
		<div class="linha botoes">
			<div><input type="submit" value="Entrar"></div>
		</div>
		<div class="retorno"><?php echo $retorno; ?></div>
	</form>
</body>
</html>