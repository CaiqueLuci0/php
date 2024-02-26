<?php 

// $conn = mysqli_connect('host', 'user', 'password', 'dbName');

try{
    $conn = new PDO("mysql:dbname=pdo;host=localhost", "root", "");
    echo 'conectado :)';
} catch (Exception $error){
    echo "Erro ao conectar :( ". $error;
}