<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecao de livros</title>
</head>
<body>
        <?php


            /*
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
            */
            $livros = [];

            switch ($_GET['view']){
                case 'Adele':
                    $livros[0]=  [
                        "nome"=> "Morro dos ventos Uivantes",
                        "autor"=> "J. K. Rowling",
                        "ano" => "1975",
                        "purchaseUrl"=> "https://www.amazon.com.br/morro-dos-ventos-uivantes/dp/8594318235",
                    ];
                default:
                    $livros[0]=  [
                        "nome"=> "",
                        "autor"=> "",
                        "ano" => "",
                        "purchaseUrl"=> "",
                    ];
                break;
            }

            $flterBooks = array_filter($livros, function ($livros) {
                return $livros['autor'] == 'J. K. Rowling';
            });
            
        ?>

         <ul>
            <h1>
            <?="<a href='{$livros[0]['purchaseUrl']}'>{$livros[0]['nome']};</a><br>"; ?>
            <?="<a href='{$livros[0]['purchaseUrl']}'>{$livros[0]['autor']};</a><br>"; ?>
            <?="<a href='{$livros[0]['purchaseUrl']}'>{$livros[0]['ano']};</a><br>"; ?>
            <?="<a href='{$livros[0]['purchaseUrl']}'>{$livros[0]['purchaseUrl']};</a><br>"; ?>
            
         </ul>              
</body>
</html>