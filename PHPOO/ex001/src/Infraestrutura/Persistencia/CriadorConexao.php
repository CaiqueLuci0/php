<?php 

namespace Caique\Comercial\Infraestrutura\Persistencia;

use PDO;
use PDOException;

class CriadorConexao
{
    public static function criarConexao(): PDO
    {
        try{
            $pdo = new PDO("mysql:host=localhost; dbname=produto", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch(PDOException $e){
            echo "<h1>ERRO: $e </h1>";
        }
    }
}