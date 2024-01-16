<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e constantes</title>
</head>
<body>
    <?php 
        $nome = "Caique";
        $sobrenome = "Lucio";

        //O nome é uma variável, então eu posso mudar o valor!
        $nome = "Sophia";

        const DT_NASC = "26/10/2004";

        print "Hello, $nome $sobrenome, você nasceu em " . DT_NASC;
    ?>
</body>
</html>