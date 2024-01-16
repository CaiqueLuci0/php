<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
</head>
<body>
    <?php 
        $comidas = array('banana', 'lasanha', 'sapato', 'limão');

        // Coloca um novo valor na ultima posição do vetor
        array_push($comidas, 'pizza');

        // Remove o ultimo elemento
        array_pop($comidas);

        // Remove o primeiro elemento
        array_shift($comidas);

        // Inverte o vetor
        $comidas_invertidas = array_reverse($comidas);

        foreach($comidas as $comida){
            echo $comida . "<br>";
        };
    ?>
</body>
</html>