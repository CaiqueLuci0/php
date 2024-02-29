<?php 
namespace Caique\Comercial\Infraestrutura\Repositorio;

use Caique\Comercial\Dominio\Repositorio\RepositorioEndereco;
use Caique\Comercial\Dominio\Modelo\Endereco;
use PDO;

class PdoRepositorioEndereco implements RepositorioEndereco
{
    private PDO $conn;

    public function __construct(PDO $pdo)
    {
        $this->conn = $pdo;
    }

    public function todosEnderecos(): array
    {
        $stmt = $this->conn->query("SELECT * FROM endereco");
        return $this->hidratarDados($stmt);
    }

    public function read(Endereco $endereco): array
    {
        $stmt = $this->conn->prepare("SELECT * FROM endereco WHERE idEndereco = ?;");
        $stmt->bindValue(1, $endereco->getId(), PDO::PARAM_INT);
        $stmt->execute();
        return $this->hidratarDados($stmt);
    }

    public function delete(Endereco $endereco): bool
    {
        $stmt = $this->conn->prepare("DELETE FROM endereco WHERE idEndereco = ?;");
        $stmt->bindValue(1, $endereco->getId(), PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function salvar(Endereco $endereco): bool
    {
        if(empty($endereco->getId())){
            return $this->create($endereco);
        }

        return $this->update($endereco);
    }

    private function create(Endereco $endereco): bool
    {
        $stmt = $this->conn->prepare("INSERT INTO endereco (idEndereco, rua, cep, numero) VALUES (?, ?, ?, ?);");
        $stmt->bindValue(1, $endereco->getId(), PDO::PARAM_INT);
        $stmt->bindValue(2, $endereco->getRua(), PDO::PARAM_STR);
        $stmt->bindValue(3, $endereco->getCep(), PDO::PARAM_STR);
        $stmt->bindValue(4, $endereco->getNumero(), PDO::PARAM_INT);

        return $stmt->execute();
    }

    private function update(Endereco $endereco): bool
    {
        $stmt = $this->conn->prepare("UPDATE endereco SET numero = ?, cep = ? , rua = ? WHERE idEndereco = ?;");
        $stmt->bindValue(4, $endereco->getId(), PDO::PARAM_INT);
        $stmt->bindValue(3, $endereco->getRua(), PDO::PARAM_STR);
        $stmt->bindValue(2, $endereco->getCep(), PDO::PARAM_STR);
        $stmt->bindValue(1, $endereco->getNumero(), PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function hidratarDados(\PDOStatement $stmt): array
    {
        $select = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $listaEnderecos = [];

        echo "<h1>Lista enderecos</h1>";
        $i = 0;
        foreach($select as $row){

            $listaEnderecos[] = new Endereco(
                $row['idEndereco'],
                $row['rua'],
                $row['numero'],
                $row['cep']
            );

            echo $listaEnderecos[$i];
            $i++;
        } //FIM FOREACH

        return $listaEnderecos;
    }
}