<?php 

require_once "Pessoa.php";

class Funcionario extends Pessoa
{
   private float $salario;
   private string $cargo;

   public function __construct(Endereco $endereco, int $idade, string $nome, string $cargo, float $salario)
   {
        parent::__construct($nome, $idade, $endereco);
        $this->cargo = $cargo;
        $this->salario = $salario;
   }

   //GETTERS

   public function getSalario(): float
   {
        return $this->salario;
   }

   public function getCargo(): string
   {
    return $this->cargo;
   }
}