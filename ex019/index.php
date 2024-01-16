<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
</head>
<body>
    <h1>Calculadora de tempo</h1>
    <?php 
        $seg = $_GET['segundos'] ?? 0;
    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        Insira a quantidade de segundos <input type="number" name="segundos" value="<?=$seg?>">
        <input type="submit" value="enviar">
    </form>

    <div>
        <?php 
            //Semanas
            $restSemana = $seg % 604800;
            $qtdSemana =  ($seg - $restSemana) / 604800;
            //Dias
            $restDia = $restSemana % 86400;
            $qtdDia = ($restSemana - $restDia) / 86400;
            //Horas
            $restHora = $restDia % 3600;
            $qtdHora = ($restDia - $restHora) / 3600;
            //Minutos 
            $restMin = $restHora % 60;
            $qtdMin = ($restHora - $restMin) / 60;
            //Segundos = $restMin
        ?>
        <ul>
            <li><?=
                "Semanas: $qtdSemana"
            ?></li>
            <li><?=
                "Dias: $qtdDia"
            ?></li>
            <li><?=
                "Horas: $qtdHora"
            ?></li>
            <li><?=
                "Minutos: $qtdMin"
            ?></li>
            <li><?=
                "Segundos: $restMin"
            ?></li>
        </ul>
    </div>
</body>
</html>