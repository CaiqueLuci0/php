<?php 

abstract class Pessoa
{
    private string $nome;
    private int $idade;
    private Endereco $endereco;
    private static int $numPessoas = 0;

    public function __construct(string $nome, int $idade, Endereco $endereco)
    {
        $this->endereco = $endereco;
        $this->nome     = $nome;
        $this->idade    = $idade;
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
}