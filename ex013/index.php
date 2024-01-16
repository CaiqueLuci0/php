<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
    <style>
        #div_resultado {
            width: 300px;
            height: 300px;
        }
        .linha{
            width: 100%;
            height: 50%;
            display: flex;
        }
        .quadrado{
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }  
        
        .quadrado2{
            border-left: 2px solid #000;
        }
    </style>
</head>
<body>

    <?php 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
    ?>
    <h1>Anatomia de uma divisão</h1>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        Dividendo<input type="number" name="dividendo" value="<?= $dividendo ?>"> <br>
        Divisor <input type="number" name="divisor" value="<?= $divisor ?>"> <br>
        <input type="submit" value="enviar">
    </form>
    <div id="div_resultado">
        <?php
            $resto = $dividendo % $divisor;
            $dividendoReal = $dividendo - $resto;
            $resDivisao = $dividendoReal / $divisor;
        ?>
        <div class="linha">
            <div class="quadrado"><?= "<h2>$dividendo</h2>" ?></div>
            <div class="quadrado quadrado2" style="border-bottom: #000 solid 2px;"><?= "<h2>$divisor</h2>" ?></div>
        </div>
        <div class="linha">
            <div class="quadrado"><?= "<h2>$resto</h2>" ?></div>
            <div class="quadrado quadrado2"><?= "<h2>$resDivisao</h2>" ?></div>
        </div>
    </div>
</body>
</html>