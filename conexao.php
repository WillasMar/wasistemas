<?php
	/*
	verificar porta no arquivo de configuração
	C:\wamp64\bin\mysql\mysql8.0.18\my.ini
		[client] 
		port =3308 
		socket = /tmp/mysql.sock
	*/
	$dsn = "mysql:port=3308;dbname=banco;host=localhost;charset=utf8";
	$dbuser = "root";
	$dbpass = "";

	try{
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	}catch(PDOExceotion $e){
		echo "Erro: ".$e->getMessage();
	}
?>