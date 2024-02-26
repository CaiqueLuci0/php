<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex001</title>
</head>
<body>
    <?php 
        require_once "src/Funcionario.php";
        require_once "src/Endereco.php";

        $endereco1 = new Endereco("Rua Antonio Thadeu", 373, "0444-676");
        $funcionario1 = new Funcionario($endereco1, 19, "Caique", "Estagiário", 1800.00 );

        // var_dump($funcionario1);

        $funcionario1->setSenha('sptech88');

        
        echo $funcionario1->__toString();
        echo $funcionario1->login("Caique", "sptech87");
        echo $funcionario1->login("Caique", "sptech88");

        var_dump($funcionario1);

        echo $funcionario1->endereco->rua;
    ?>
</body>
</html>