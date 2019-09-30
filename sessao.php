<?php

	session_start();
	require "conexao.php";

	if(isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])){
		$nome = $_SESSION['nome'];
	}else{
		header("Location: login.php");
	}

?>