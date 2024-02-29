
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
        use Caique\Comercial\Infraestrutura\Repositorio\PdoRepositorioProduto;
        use Caique\Comercial\Dominio\Modelo\Produto;

        $conn = CriadorConexao::criarConexao();
        // var_dump($conn);

        $produto1 = new Produto(3, 'Notebook', 5000.0);

        $repositorio = new PdoRepositorioProduto($conn);

        // $repositorio->deleteProduto($produto1);

        $repositorio->readProduto($produto1);

        // $repositorio->salvar($produto1);

        // $repositorio->todosProdutos();

        // var_dump($produto1);
    ?>
</body>
</html>