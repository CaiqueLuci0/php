<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include 'autoload.php';

        use Caique\Comercial\Infraestrutura\Persistencia\CriadorConexao;
        use Caique\Comercial\Modelo\Produto;

        $conn = CriadorConexao::criarConexao();
        var_dump($conn);

        $produto1 = new Produto(null, 'Notebook', 5000.0);
        var_dump($produto1);
    ?>
</body>
</html>