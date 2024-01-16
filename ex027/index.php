<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>

<body>
    <?php
    include("header.html");
    ?>

    <?php
    if (isset($_POST['validar'])) {
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
    }
    ?>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <input type="text" name="nome" value="<?php
                                                if (isset($nome)) {
                                                    echo $nome;
                                                };
                                                ?>">
        <input type="password" name="senha" value="<?php
                                                    if(isset($senha)){
                                                        echo $senha;
                                                    };
                                                    ?>">
        <input type="submit" name="validar" value="enviar">
    </form>

    <?php 
        if(isset($_POST['validar'])){
            if(!empty(filter_var($nome, FILTER_SANITIZE_NUMBER_INT))){
                echo 'O nome não pode conter números!';
            } else if(empty($senha)){
                echo 'A senha não pode estar vazia!';
            } else if(strlen($senha) < 8){
                echo 'A senha deve conter no mínimo 8 caracteres!';
            } else if($senha != filter_var($senha, FILTER_SANITIZE_SPECIAL_CHARS)){
                echo 'A senha não pode conter caracteres especiais';
            } else {
                setcookie("nome", "$nome", time() + 86400 , "/");
                session_start();
                $_SESSION["senha"] = $senha;
                header("Location: saudacao.php");
            };
        };
    ?>
</body>

</html>