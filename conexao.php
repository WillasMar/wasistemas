<?php

	$dsn = "mysql:dbname=banco;host=localhost;charset=utf8";
	$dbuser = "root";
	$dbpass = "";

	try{
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	}catch(PDOExceotion $e){
		echo "Erro: ".$e->getMessage();
	}
?>