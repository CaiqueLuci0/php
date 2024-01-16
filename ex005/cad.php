<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php 
        $n = $_GET["nome"] ?? "Sem nome";
        $sn = $_GET["snome"] ?? "Sem sobrenome";
        print "Olá $n $sn, é um prazer te conhecer :)"
    ?>

    <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
</body>
</html>