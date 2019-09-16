<meta charset="utf-8">

<?php

	$dsn = "mysql:dbname=banco;host=localhost";
	$dbuser = "root";
	$dbpass = "";	
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	$tabela = $_POST["tabela"];
	$acao = $_POST["acao"];

	switch ($acao) {
		case 'select':
			select($pdo,$tabela);
			break;
		case 'insert':
			insert($pdo,$tabela);
			break;		
		default:
			echo 'Não foi feito nenhum comando!';
			break;
	}

	function select($_pdo,$_tabela){
		try{	
			$sql = "select * from ".$_tabela;
			$sql = $_pdo->query($sql);

			if($sql->rowCount() > 0){
				foreach ($sql->fetchAll() as $dados) {
					echo "Nome: ".$dados["CLIENTE"]."<br>";
					echo "Nome: ".$dados["NOME"]."<br>";
					echo "Nome: ".$dados["RAZAO_SOCIAL"]."<br>";
					echo "Nome: ".$dados["CPF"]."<br>";
				}
			}else{
				echo "Não há clientes cadastrados!";
			}		
		}catch(PDOException $e){
			echo "Erro: ".$e->getMessage();
		}
	}
	function insert($_pdo, $_tabela){
		$sql_insert = "INSERT INTO ".$_tabela." (";
		$sql_aux = "";

		foreach ($_POST as $key => $value) {
			$sql_aux = "$sql_aux $key";			
		}

		$sql_aux = explode(" ", $sql_aux);
		print_r($sql_aux);
		
	}

?>