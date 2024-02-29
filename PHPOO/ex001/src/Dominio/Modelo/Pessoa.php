<?php 

namespace Caique\Comercial\Dominio\Modelo;

use DateTimeImmutable;
use DateTimeInterface;

require_once 'autoload.php';

abstract class Pessoa
{
    protected string $nome;
    protected DateTimeInterface $dtNasc;
    protected Endereco $endereco;
    protected static int $numPessoas = 0;
    //Atributo protected = pode ser acessado diretamente pelas classes filhas
    protected float $desconto;

    public function __construct(string $nome, DateTimeInterface $dtNasc, Endereco $endereco)
    {
        $this->endereco = $endereco;
        $this->nome     = $nome;
        $this->dtNasc   = $dtNasc;
        $this->setDesconto();
        self::$numPessoas++;
    }

    //GETTERS

    protected function getNome(): string
    {
        return $this->nome;
    }

    public function getdtNasc(): DateTimeInterface
    {
        return  $this->dtNasc;
    }

    public static function getNumPessoas(): int
    {
        return self::$numPessoas;
    }

    public function getDesconto(): float
    {
        return $this->desconto;
    }

    //SETTERS

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setdtNasc(DateTimeInterface $dtNasc): void
    {
        $this->dtNasc = $dtNasc;
    }

    //DESTRUCT

    public function __destruct()
    {
        self::$numPessoas--;
    }

    public function idade(): int
    {
        return $this->getdtNasc()->diff(new DateTimeImmutable())->y;
    }

    // Metodos protected são obrigatóriamente criados nas classes filhas
    protected abstract function setDesconto(): void;

    public abstract function __toString(): string;
}