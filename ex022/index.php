<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php 
        $nota = 'A';
        switch($nota){
            case "A":
                echo "é us guri";
                break;
            case "B":
                echo "é mais ou menos us guri";
                break;
            case "C":
                echo "é muito pouco us guri";
                break;
            case "D":
                echo "irug us é";
                break;
            default:
                echo "$nota não é válida.";
                break;
        };
    ?>
</body>
</html>