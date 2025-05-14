<?php
 //Conectar Banco de dados MySQL
require "index.php";

//Utilizar o query do mySql
class Database { 
    public function query()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=meu_banco;charset=utf8mb4";
        $pdo = new PDO($dsn);

        $statement = $pdo -> prepare($query);
    }
}
    $db = new Database();
    $username = $db->query("SELECT * FROM user where book = 'Morro dos ventos Uivantes");

?>