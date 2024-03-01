<?php

namespace Caique\Comercial\Dominio\Modelo;

require_once 'autoload.php';

class Endereco
{

    use AcessoAtributos;

    private ?int $id;
    private string $rua;
    private int $numero;
    private string $cep;
    

    public function __construct(?int $id, string $rua, int $numero, string $cep)
    {
        $this->id     = $id;
        $this->rua    = $rua;
        $this->numero = $numero;
        $this->cep    = $cep;
    }

    //Getters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    //Setters

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setRua(string $rua): void
    {
        $this->rua = $rua;
    }

    public function setNumero(int $numero): void
    {
        $this->numero = $numero;
    }

    public function setCep(string $cep): void
    {
        $this->cep = $cep;
    }

    public function __toString(): string
    {
        return "
        <br>
        Endereco {$this->id} <br>
        Rua: {$this->rua} <br>
        Número: {$this->numero} <br>
        CEP: {$this->cep}
        <hr>
        ";
    }
}
