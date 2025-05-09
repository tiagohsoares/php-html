<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            $livros = [
                [
                    "nome"=> "Morro dos ventos Uivantes",
                    "autor"=> "J. K. Rowling",
                    "ano" => "1975",
                    "purchaseUrl"=> "https:\\lojaA.com.br",
                ],
                [
                    "nome" => "Harry Potter",
                    "autor" => "J. K. Rowling",
                    "ano" => "1973",
                    "purchaseUrl" => "https:\\lojaB.com.br",
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