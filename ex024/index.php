<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <?php 
        $doces = array(
            "picolé" =>"ok",
            "geladinho natural" => "muito bom",
            'pirulito' => "ok",
            "bolo de cenoura" => "bom"
        );

        //Reúne apenas as chaves do array associativo em um novo array
        $keys = array_keys($doces);

        //Reúne apenas os valores do array associativo em um novo array
        $values = array_values($doces); 

        // troca as keys e os valores de posição (key se torna valor e valor se torna key)
        $doces2 = array_flip($doces);

        foreach($doces as $doce => $qualidade){
            echo "$doce = $qualidade <br>";
        };

        echo count($doces);
    ?>
</body>
</html>