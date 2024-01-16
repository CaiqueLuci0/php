<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias</title>
</head>

<body>
    <h1>Médias</h1>
    <?php 
        $n1 = $_GET['n1'] ?? mt_rand(0, 9);
        $n2 = $_GET['n2'] ?? mt_rand(0, 9);
        $p1 = $_GET['p1'] ?? mt_rand(0, 9);
        $p2 = $_GET['p2'] ?? mt_rand(0, 9);
    ?>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        1° Valor <input type="number" name="n1" value="<?= $n1 ?>"> <br>
        1° Peso <input type="number" name="p1" value="<?= $p1 ?>"> <br>
        2° Valor <input type="number" name="n2" value="<?= $n2 ?>"> <br>
        2° Peso <input type="number" name="p2" value="<?= $p2 ?>"> <br>
        <input type="submit" value="Enviar">
    </form>

    <div>
        <h1>Resultados</h1>
        <?php 
            $mediaArit = ($n1 + $n2) / 2;
            $mediaPond = number_format(($n1 * $p1 + $n2 * $p2) / ($p1 + $p2), 3 , ',' , '.');
        ?>
        <ul>
            <li>
                <?= "A média aritmética é = <b>$mediaArit</b>"?>
            </li>
            <li>
                <?= "A média ponderada é = <b>$mediaPond</b>"?>
            </li>
        </ul>
    </div>
</body>

</html>