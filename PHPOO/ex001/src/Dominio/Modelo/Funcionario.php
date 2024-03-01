<?php 

namespace Caique\Comercial\Dominio\Modelo;

use DateTimeInterface;

require_once 'autoload.php';

class Funcionario extends Pessoa implements Autenticar
{
   private float $salario;
   private string $cargo;
   private string $senha;

   public function __construct(Endereco $endereco, ?int $id, DateTimeInterface $dtNasc, string $nome, string $cargo, float $salario)
   {
        parent::__construct($id, $nome, $dtNasc, $endereco);
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

   public function getSenha(): string
   {
     return $this->senha;
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

   public function setSenha(string $senha): void
   {
     $this->senha = $senha;
   }

   public function __toString(): string
   {
     return "<h1>QtdPessoas: {$this->getNumPessoas()}</h1>
     <h1>Nome: {$this->getNome()}</h1>
     <h1>dtNasc: {$this->getdtNasc()->format("d-m-Y")}</h1>
     <h1>Cargo: {$this->getCargo()}</h1>
     <h1>Salário: {$this->getSalario()}</h1>
     <h1>Rua: {$this->endereco->getRua()}</h1>
     <h1>Numero: {$this->endereco->getNumero()}</h1>
     <h1>Cep: {$this->endereco->getCep()}</h1>
     ";
   }

   public function login(string $nome, string $senha): string
   {
     if($this->getNome() === $nome && $this->getSenha() === $senha){
          return "<h1>Login realizado com sucesso!</h1>";
     }
          return "<h1>Senha ou nome incorreto</h1>";
   }
}