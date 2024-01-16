<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores aletórios</title>
</head>
<body>
    <?php 
        $numero = rand(0,100);
        echo "
        Gerando números aleatórios entre 0 e 100... <br>
        O número gerado desta vez foi <b style=\"color: green;\">$numero</b>
        "
    ?>

    <form action="index.php">
        <input type="submit" value="gerar novo número">
    </form>
</body>
</html>