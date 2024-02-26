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

        var_dump($funcionario1);

        
        echo "<h1>QtdPessoas: {$funcionario1->getNumPessoas()}</h1>
        <h1>Nome: {$funcionario1->getNome()}</h1>
        <h1>Idade: {$funcionario1->getidade()}</h1>
        <h1>Cargo: {$funcionario1->getCargo()}</h1>
        <h1>Salário: {$funcionario1->getSalario()}</h1>
        ";

        var_dump($funcionario1);
    ?>
</body>
</html>