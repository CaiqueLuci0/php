<?php 

abstract class Pessoa
{
    private string $nome;
    private int $idade;
    public Endereco $endereco;
    private static int $numPessoas = 0;
    //Atributo protected = pode ser acessado diretamente pelas classes filhas
    protected float $desconto;

    public function __construct(string $nome, int $idade, Endereco $endereco)
    {
        $this->endereco = $endereco;
        $this->nome     = $nome;
        $this->idade    = $idade;
        $this->setDesconto();
        self::$numPessoas++;
    }

    //GETTERS

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getIdade(): int
    {
        return  $this->idade;
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

    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }

    //DESTRUCT

    public function __destruct()
    {
        self::$numPessoas--;
    }

    // Metodos protected são obrigatóriamente criados nas classes filhas
    protected abstract function setDesconto(): void;

    public abstract function __toString(): string;
}