<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor convertido</title>
</head>
<body>
    <?php 
        $valorDigitado = $_GET["numero"] ?? 0;
        $cotacao = 5.22;
        $convercao = number_format($valorDigitado / 5.22, 2, ",", ".");
        print "O seus R\$$valorDigitado ao passar pela cotação em dolar de $cotacao, equivalem a US\$$convercao."
    ?>
    <br>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>