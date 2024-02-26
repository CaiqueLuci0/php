<?php

require_once 'config.php';

$nome = 'CAIO ALGORITMOS';
$conn->query("INSERT INTO
cliente (nome, endereco, telefone) values
('$nome', 'Sptech', '983987068');
");