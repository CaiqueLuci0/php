<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular idade</title>
</head>

<body>
    <h1>Calcular idade</h1>
    <?php
    $dtNasc = $_GET['dtNasc'] ?? mt_rand(1950, 2004);
    $dtAtual = $_GET['dtAtual'] ?? 2000 + date('y');


    ?>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        Ano de nascimento <input type="number" name="dtNasc" value="<?= $dtNasc ?>">
        Ano atual <input type="number" name="dtAtual" value="<?= $dtAtual ?>">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <div>
        <h1>Resultado</h1>
        <?php 
        print "Você nasceu no ano de $dtNasc então terá " . $dtAtual - $dtNasc . " anos em $dtAtual"
        ?>
    </div>
</body>

</html>