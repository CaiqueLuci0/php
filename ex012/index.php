<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário retroalimentado</title>
</head>

<body>
    <h1>
        Formulário retroalimentado
    </h1>

    <?php
    $nome = $_GET['nom'] ?? "sem nome";
    $snome = $_GET['snom'] ?? "sem sobrenome";
    ?>

    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
        <span>Insira seu nome: <input type="text" name="nom" value="<?= $nome ?>"></span> <br>
        <span>Insira seu sobrenome: <input type="text" name="snom" value="<?= $snome ?>"></span> <br>

        <input type="submit" value="enviar">
    </form>

    <div>
        <h1>Resultado maneiro</h1>
        <?= "Olá, $nome $snome. Hoje é dia " . date('d/m/y')?>
    </div>
</body>

</html>