<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <h1>RESULTADO</h1>
    <?php
    $numero = $_GET["numero"] ?? 0;
    $parteInteira = (int) $numero;
    $parteDecimal = $numero - $parteInteira;
    print "
        <h1>O número é: $numero</h1>
        <ul>
            <li>Parte inteira: $parteInteira</li>
            <li>Parte decimal: $parteDecimal</li>
        </ul>
    "
    ?>

    <a href="javascript:history.go(-1)">Voltar</a>

</body>

</html>