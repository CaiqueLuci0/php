<?php

namespace Caique\Comercial\Dominio\Repositorio;

use Caique\Comercial\Dominio\Modelo\Funcionario;

interface RepositorioFuncionario
{
    public function todosFuncionario(): array;
    public function salvar(Funcionario $funcionario): bool;
    public function delete(Funcionario $funcionario): bool;
    public function read(Funcionario $funcionario): array;
}