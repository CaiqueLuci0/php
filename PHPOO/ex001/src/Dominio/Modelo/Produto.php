<?php 
namespace Caique\Comercial\Dominio\Modelo;

class Produto{
    private ?int $id;
    private string $nome;
    private float $preco;
    
    public function __construct(?int $id, string $nome, float $preco)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
    }

    //GETTERS

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    //SETTERS

    public function setNome(string $nome):void
    {
        $this->nome = $nome;
    }

    public function setId(?int $id):void
    {
        $this->id = $id;
    }

    public function setPreco(float $preco):void
    {
        $this->preco = $preco;
    }
}