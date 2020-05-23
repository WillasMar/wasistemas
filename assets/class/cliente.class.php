<?php

    //require 'sessao.php';

    class Cliente{
        private $pdo;

        public function __construct($pdo){
            $this->pdo = $pdo;
        }

        public function select(){
            $sql = "select * from clientes";
            $sql = $this->pdo->query($sql);

            if($sql->rowCount() > 0){
                $sql = $sql->fetchAll();
                return $sql;
            }else{
                return false;
            }
        }

        public function Insert($nome,$razao,$cpf,$cnpj){
            $sql = "insert into clientes(nome,razao,cpf,cnpj)values(?,?,?,?)";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($nome,$razao,$cpf,$cnpj));

            return "Dados inseridos com sucesso!";
        }
    }