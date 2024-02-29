<?php

namespace Caique\Comercial\Dominio\Modelo;

interface Autenticar
{
    public function login(string $nome, string $senha): string;
}             