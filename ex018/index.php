<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de preço</title>
</head>

<body>
    <?php 
        $preco = $_GET['preco'] ?? mt_rand(1, 200);
        $prct = $_GET['prct'] ?? mt_rand(1, 100);
    ?>
    <h1>Reajuste de preço</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>">
        Preço <input type="number" name="preco" value="<?=$preco?>"> <br>
        Porcentagem de reajuste <input type="number" name="prct" value="<?=$prct?>"> <br>
        <input type="submit" value="Enviar">
    </form>

    <div>
        <?php 
            $valorPrct = $prct * $preco / 100;
            $valorTotal = $preco + $valorPrct;

            print "O produto com o preço de R$ " . number_format($preco, 2, ",", ".") . " com o reajuste de $prct%, agora tem o preço de R$ " . number_format($valorTotal, 2, ',', '.')
        ?>
    </div>
</body>

</html>