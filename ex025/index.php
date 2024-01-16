<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio</title>
</head>
<body>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <input type="radio" name="cartao" value="Mastercard">Mastercard <br>
        <input type="radio" name="cartao" value="Visa">Visa<br>
        <input type="radio" name="cartao" value="American Express">American Express <br>
        <input type="submit" name="submit" value="Validar">
    </form>

    <?php 
    if(isset($_POST['submit'])){
        if(!empty($_POST['cartao'])){
            $credit_card = $_POST['cartao'];

            switch($credit_card){
                case "Mastercard": 
                    echo "Você selecionou Mastercard";
                    break;
                case "Visa": 
                    echo "Você selecionou Visa";
                    break;
                case "American Express": 
                    echo "Você selecionou American Express";
            };
        } else {
            echo "Selecione um cartão";
        }
    };  
        
    ?>
</body>
</html>