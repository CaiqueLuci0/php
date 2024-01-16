<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salário mínimo</title>
</head>

<body>
    <h1>Informe seu salário</h1>
    <?php
    $salario = $_GET['salario'] ?? 1380.00
    ?>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <input type="number" name="salario" value="<?= $salario ?>">
        <input type="submit" value="enviar">
    </form>

    <div id="div_resultado">
        <h2>Resultado final</h2>
        <p><?php 
            $resto = $salario % 1380;
            $divisorReal = $salario - $resto;
            $qtdSalarios = $divisorReal / 1380;

            print "Quem recebe um salário de R\$ $salario ganha <b>$qtdSalarios salários mínimos</b> + R\$ $resto"
        ?></p>
    </div>
</body>

</html>