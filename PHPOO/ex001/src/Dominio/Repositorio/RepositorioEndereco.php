<?php 

namespace Caique\Comercial\Dominio\Repositorio;

use Caique\Comercial\Dominio\Modelo\Endereco;

interface RepositorioEndereco
{
    public function todosEnderecos(): array;
    public function salvar(Endereco $endereco): bool;
    public function read(Endereco $endereco): array;
    public function delete(Endereco $endereco): bool;
}
