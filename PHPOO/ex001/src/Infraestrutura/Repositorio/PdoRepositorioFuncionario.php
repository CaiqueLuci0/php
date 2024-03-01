<?php
namespace Caique\Comercial\Infraestrutura\Repositorio;

use Caique\Comercial\Dominio\Modelo\Endereco;
use Caique\Comercial\Dominio\Repositorio\RepositorioFuncionario;
use Caique\Comercial\Dominio\Modelo\Funcionario;
use DateTimeImmutable;
use PDO;
use PDOStatement;

class PdoRepositorioFuncionario implements RepositorioFuncionario
{
    private PDO $conn;

    public function __construct(PDO $pdo)
    {
        $this->conn = $pdo;
    }

    public function todosFuncionario(): array
    {
        $stmt = $this->conn->query("SELECT * FROM funcionario JOIN endereco 
        ON endereco = idEndereco;");

        return $this->hidratarDados($stmt);
    }

    public function salvar(Funcionario $funcionario): bool
    {
        if($funcionario->getId() === NULL){
            return $this->create($funcionario);
        }

        return $this->update($funcionario);
    }

    public function create(Funcionario $funcionario): bool
    {
        $query = $this->conn->prepare(
            "INSERT INTO funcionario 
            (nome, dtNasc, cargo, salario, endereco) VALUES
            (?, ?, ?, ?, ?);
        ");

        $query->bindValue(1, $funcionario->getNome(), PDO::PARAM_STR);
        $query->bindValue(2, $funcionario->getdtNasc()->format("Y-m-d"), PDO::PARAM_STR);
        $query->bindValue(3, $funcionario->getCargo(), PDO::PARAM_STR);
        $query->bindValue(4, $funcionario->getSalario(), PDO::PARAM_STR);
        $query->bindValue(5, $funcionario->endereco->getId(), PDO::PARAM_INT);

        $sucesso = $query->execute();

        if($sucesso){
            $funcionario->setId($this->conn->lastInsertId());
        }

        return $sucesso;
    }

    public function update(Funcionario $funcionario): bool
    {
        $query = $this->conn->prepare(
            "UPDATE funcionario SET 
            nome = ?, 
            dtNasc = ?, 
            cargo = ?, 
            salario = ?, 
            endereco = ?
            WHERE idFuncionario = ?;"
        );

        $query->bindValue(1, $funcionario->getNome(), PDO::PARAM_STR);
        $query->bindValue(2, $funcionario->getdtNasc()->format("Y-m-d"), PDO::PARAM_STR);
        $query->bindValue(3, $funcionario->getCargo(), PDO::PARAM_STR);
        $query->bindValue(4, $funcionario->getSalario(), PDO::PARAM_STR);
        $query->bindValue(5, $funcionario->endereco->getId(), PDO::PARAM_INT);
        $query->bindValue(6, $funcionario->getId(), PDO::PARAM_INT);

        return $query->execute();
    }

    public function read(Funcionario $funcionario): array
    {
        $query = $this->conn->prepare(
            "SELECT * FROM funcionario 
            JOIN endereco 
            ON endereco = idEndereco
            WHERE idFuncionario = :id;"
        );
        $query->bindValue(":id", $funcionario->getId(), PDO::PARAM_INT);
        $query->execute(); 
        return $this->hidratarDados($query);
    }

    public function delete(Funcionario $funcionario): bool
    {
        $query = $this->conn->prepare("DELETE FROM funcionario WHERE idFuncionario = :id;");
        $query->bindValue(":id", $funcionario->getId(), PDO::PARAM_INT);

        return $query->execute();
    }

    public function hidratarDados(\PDOStatement $stmt): array
    {
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $listaFunc = [];

        
        for($i = 0; $i < count($res); $i++)
        {
            $listaFunc[] = new Funcionario(
                new endereco(
                    $res[$i]['idEndereco'], 
                    $res[$i]['rua'], 
                    $res[$i]['numero'], 
                    $res[$i]['cep']
                ),
                $res[$i]['idFuncionario'],
                new DateTimeImmutable($res[$i]['dtNasc']),
                $res[$i]['nome'],
                $res[$i]['cargo'],
                $res[$i]['salario']
            );

            echo $listaFunc[$i];
        }

        return $listaFunc;
    }
}