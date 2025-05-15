<?php
 //Conectar Banco de dados MySQL
require_once "config.php";
//Utilizar o query do mySql
        try {
            $pdo = new PDO($dsn, $username, $password);
            echo "Conexão bem-sucedida!";
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        };
?>