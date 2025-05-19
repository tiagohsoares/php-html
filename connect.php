<?php
 //Conectar Banco de dados MySQL

        $db = new PDO("pgsql:host=localhost;port=5432;dbname=businessdb;", "postgres", "123456");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexão bem-sucedida!";
