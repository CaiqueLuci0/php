<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de decisão</title>
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="age">Insira sua idade:</label>
        <input type="number" name="age" value="<?php
                                                $age = $_POST['age'] ?? null;
                                                if (isset($age)) {
                                                    print $age;
                                                };
                                                ?>"> <br>
        <input type="submit" value="enviar">
    </form>

    <div>
        <?php
        if (!empty($age)) { 
            if ($age >= 0 && $age <= 200) {
                print "<h1>Você tem $age anos</h1>";
                if ($age <= 11) {
                    print "Tu é muito novo.";
                } elseif ($age <= 17) {
                    print "Tu já é um adolescente.";
                } elseif ($age <= 30) {
                    print "Tu é um jovem adulto.";
                } elseif ($age <= 50) {
                    print "Velho";
                } elseif ($age <= 80) {
                    print "Idoso";
                } else {
                    print "Múmia";
                };
            } else {
                print "<h1>Ninguém tem mais de 200 anos, nem menos de 0 anos!</h1>";
            };
        } else {
            print "Insira um valor válido";
        };

        ?>
    </div>
</body>

</html>