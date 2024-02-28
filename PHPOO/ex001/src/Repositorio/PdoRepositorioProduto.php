<?php 

namespace Caique\Comercial\Repositorio;

// require_once __DIR__ . "/../../autoload.php";

use Caique\Comercial\Dominio\Repositorio\RepositorioProdutos;
use Caique\Comercial\Modelo\Produto;
use PDO;

class PdoRepositorioProduto implements RepositorioProdutos
{

    private PDO $conn;

    public function __construct(PDO $pdo)
    {
        $this->conn = $pdo;    
    }


    public function todosProdutos(): array
    {
        $stmt = $this->conn->query("SELECT * FROM produto");

        var_dump($stmt);

        return $this->hidratarDados($stmt);
    }

    public function salvar(Produto $produto): bool
    {
        if($produto->getId() === null){
            return $this->createProduto($produto);
        }

        return $this->updateProduto($produto);
    }

    public function createProduto(Produto $produto): bool
    {
        $query = $this->conn->prepare("INSERT INTO produto (nome, preco) values (:nome, :preco);");
        $query->bindValue(':nome', $produto->getNome(), PDO::PARAM_STR);
        $query->bindValue(':preco', $produto->getPreco(), PDO::PARAM_STR);
        $sucesso = $query->execute();

        if($sucesso){
            $produto->setId($this->conn->lastInsertId());
        }

        return $sucesso;
    }

    public function readProduto(Produto $produto): array
    {
        $query = $this->conn->prepare("SELECT * FROM produto WHERE idProduto = ?;");
        $query->bindValue(1, $produto->getId(), PDO::PARAM_INT);
        $query->execute();

        return $this->hidratarDados($query);
    }

    public function updateProduto(Produto $produto): bool
    {
        $query = $this->conn->prepare("UPDATE produto SET nome = :nome, preco = :preco, idProduto = :idProduto WHERE idProduto = :idProduto;");
        $query->bindValue(':nome', $produto->getNome(), PDO::PARAM_STR);
        $query->bindValue(':preco', $produto->getPreco(), PDO::PARAM_STR);
        $query->bindValue(':idProduto', $produto->getId(), PDO::PARAM_INT);

        return $query->execute();
    }

    public function deleteProduto(Produto $produto): bool
    {
        $query = $this->conn->prepare("DELETE FROM produto WHERE idProduto = ?;");
        $query->bindValue(1, $produto->getId(), PDO::PARAM_INT);

        return $query->execute();
    }

    public function hidratarDados(\PDOStatement $stmt): array
    {
        $listaDadosProduto = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $listaProdutos = [];

        foreach($listaDadosProduto as $dadosProduto){
            $listaProdutos[] = new Produto(
                $dadosProduto['idProduto'],
                $dadosProduto['nome'],
                $dadosProduto['preco']
            );

            echo "
                <h1> {$dadosProduto['idProduto']} </h1>
                <h1> {$dadosProduto['nome']} </h1>
                <h1> {$dadosProduto['preco']} </h1>
                <hr>
            ";
        }

        return $listaProdutos;
    }
}