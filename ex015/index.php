<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAÍZES</title>
</head>
<body>
    <h1>Informe um número</h1>
    <?php 
        $numero = $_GET['numero'] ?? 0;
    ?>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <input type="number" name="numero" value="<?=$numero?>"> <br>
        <input type="submit" value="Enviar">
    </form>

    <div>
        <h1>Resultado final (poggers)</h1>
        <p>Analisando o número <b><?= $numero ?></b>, temos:</p>
        <ul>
            <li>A raiz quadrada é <?=number_format(sqrt($numero), 3 , ",", ".")?></li>
            <li>A raiz cúbica é <?= number_format($numero ** (1/3), 3, ",", ".")?></li>
        </ul>
    </div>
</body>
</html>