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

   //SETTERS

   public function setSalario(float $salario): void
   {
     $this->salario = $salario;
   }

   public function setCargo(string $cargo): void
   {
     $this->cargo = $cargo;
   }

   public function setDesconto():void
   {
     $this->desconto = 0.10;
   }

   public function __toString(): string
   {
     return "<h1>QtdPessoas: {$this->getNumPessoas()}</h1>
     <h1>Nome: {$this->getNome()}</h1>
     <h1>Idade: {$this->getidade()}</h1>
     <h1>Cargo: {$this->getCargo()}</h1>
     <h1>Salário: {$this->getSalario()}</h1>
     <h1>Rua: {$this->endereco->getRua()}</h1>
     <h1>Numero: {$this->endereco->getNumero()}</h1>
     <h1>Cep: {$this->endereco->getCep()}</h1>
     ";
   }
}