<?php

namespace Caique\Comercial\Modelo;

interface Autenticar
{
    public function login(string $nome, string $senha): string;
}             