<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecao de livros</title>
</head>
<body>
    <form action="index.php" method="post">
        <label> username: </label><br>
        <input type='text' name="username"><br>
        <label> password: </label><br>
        <input type="passsword" name="password">
        <input type="submit" value="Log in">
        <?php
            $livros = [
                [
                    "nome"=> "Morro dos ventos Uivantes",
                    "autor"=> "J. K. Rowling",
                    "ano" => "1975",
                    "purchaseUrl"=> "https://www.amazon.com.br/morro-dos-ventos-uivantes/dp/8594318235",
                ],
                [
                    "nome" => "Harry Potter",
                    "autor" => "J. K. Rowling",
                    "ano" => "1973",
                    "purchaseUrl" => "https://www.amazon.com.br/b?ie=UTF8&node=13348890011",
                ]

            ];

            $flterBooks = array_filter($livros, function ($livros) {
                return $livros['autor'] == 'J. K. Rowling';
            });
            
        ?>
        
        <ul>
            <h1>
            <?php foreach ($livros as $livro){
                echo "<a href='{$livro['purchaseUrl']}'>{$livro['nome']};</a><br>";
            }
            ?>
         </ul>
</body>
</html>
<?php

//$_GET
//$_POST
//$TOTAL = abs("$x")
//$TOTAL = round("$x")
//$TOTAL = ceil("$x")
//$TOTAL = ceil("$x")
//$TOTAL = pow("$x,$y")
