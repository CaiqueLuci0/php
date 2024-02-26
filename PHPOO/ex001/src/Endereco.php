<?php

require_once "AcessoAtributos.php";
class Endereco
{

    use AcessoAtributos;

    private string $rua;
    private int $numero;
    private string $cep;
    

    public function __construct(string $rua, int $numero, string $cep)
    {
        $this->rua    = $rua;
        $this->numero = $numero;
        $this->cep    = $cep;
    }

    //Getters
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
}
