<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 
        $numero = $_GET["numero"];

        echo "
        <h1>O número é $numero</h1> 
        <br>Seu antecessor é " . $numero - 1 . "<br> 
        E seu sucessor é " . $numero + 1;
    ?>
    <br>
    <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
</body>
</html>