<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="comidas[]" value="pão"> pão <br>
        <input type="checkbox" name="comidas[]" value="leite"> leite <br>
        <input type="checkbox" name="comidas[]" value="panetone"> panetone <br>
        <input type="submit" name="enviar" value="enviar">
    </form>

    <?php 
        if(isset($_POST['enviar'])){

            if(isset($_POST['comidas'])){

                $comidas = $_POST['comidas'];
                $i = 1;
                foreach($comidas as $comida){
                    echo "$i - Você gosta de $comida <br>";
                    $i +=1;  
                } 
            }
        }
    ?>
</body>
</html>