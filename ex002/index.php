<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        date_default_timezone_set("america/sao_paulo");
        $dia = date("d/m/y");
        $hora = date("g:i:s");
    ?>
    <?= "Olá, fulano! hoje é dia $dia e são $hora horas." ?>
</body>
</html>