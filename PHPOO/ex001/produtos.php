
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

        use Caique\Comercial\Dominio\Modelo\Funcionario;
        use Caique\Comercial\Dominio\Modelo\Endereco;
    
        use Caique\Comercial\Infraestrutura\Repositorio\PdoRepositorioEndereco;

        $conn = CriadorConexao::criarConexao();
        // var_dump($conn);

        $produto1 = new Produto(3, 'Notebook', 5000.0);

        $repositorioProduto = new PdoRepositorioProduto($conn);

        // $repositorio->deleteProduto($produto1);

        $repositorioProduto->readProduto($produto1);

        $endereco1 = new Endereco(NULL, "Rua Antonio Thadeu", 373, "04443-676");
        
        $repositorioEndereco = new PdoRepositorioEndereco($conn);

        $repositorioEndereco->salvar($endereco1);

        $endereco1 = new Endereco(2, "HAAAAAAAAAAAAAAAAAAHAHAHAHAH", 373, "04443-676");

        $repositorioEndereco->read($endereco1);
        $repositorioEndereco->salvar($endereco1);
        $repositorioEndereco->read($endereco1);
        $repositorioEndereco->todosEnderecos();

        $endereco7 = new Endereco(7, "Rua Antonio Thadeu", 373, "04443-676");

        $repositorioEndereco->delete($endereco7);

        // $repositorio->salvar($produto1);

        // $repositorio->todosProdutos();

        // var_dump($produto1);
    ?>
</body>
</html>