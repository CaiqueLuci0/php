<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>tipos primitivos 'o'</h1>
    <?php 
        $numero = 0x1A;
        var_dump($numero);
        echo "O valor é $numero <br>";
        $numero = 020;
        var_dump($numero);
        echo "O valor é $numero <br>";
        $numero = 10.9;
        var_dump($numero);
        echo "O valor é $numero <br>";
        $numero = 3e2;
        var_dump($numero);
        echo "O valor é $numero <br>";
        $numero = (int) 3e2;
        var_dump($numero);
        echo "O valor é $numero <br>";
        $numero = (string) 3e2;
        var_dump($numero);
        echo "O valor é $numero <br>";

        $vetor = [1,2,3,4,5,6,7,8];
        var_dump($vetor);

        class pessoa {
            private string $nome;
        }

        $p = new pessoa;
        echo "<br>";
        var_dump($p)
    ?>
</body>
</html>