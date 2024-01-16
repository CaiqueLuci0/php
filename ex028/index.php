<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>

<body>
    <h1>Cadastro</h1>
    <?php
    if (isset($_POST['enviar'])) {
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
    }
    ?>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        Insira seu nome<input type="text" name="nome" value="<?php
                                                if (!empty($nome)) {
                                                    echo $nome;
                                                }
                                                ?>"> <br>
        Insira uma senha <input type="password" name="senha" value="<?php
                                                    if (!empty($senha)) {
                                                        echo $senha;
                                                    }
                                                    ?>"> <br>
        <input type="submit" value="Registrar" name="enviar">
    </form>
</body>

</html>

<?php
if (isset($_POST['enviar'])) {
    if (!empty(filter_var($nome, FILTER_SANITIZE_NUMBER_INT))) {
        echo "o nome não pode conter números";
    } else if ($nome != filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS)) {
        echo "o nome não pode conter caracteres especiais";
    } else if (strlen($senha) < 8) {
        echo "A senha deve conter no mínimo 8 caracteres";
    } else if ($senha != filter_var($senha, FILTER_SANITIZE_SPECIAL_CHARS)) {
        echo "A senha não pode conter caracteres especiais";
    } else {
        include("db.php");

        $hash = password_hash($senha, PASSWORD_DEFAULT);
        $instrucao = "INSERT INTO usuario (nome, senha, dtRegistro) VALUES ('$nome', '$hash', CURRENT_TIMESTAMP())";

        try {
            mysqli_query($conn, $instrucao);
            mysqli_close($conn);
            header("Location: perfil.php");
        } catch (mysqli_sql_exception) {
            echo "erro ao registrar";
        };

    }
}
?>