<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saudacao</title>
</head>
<body>
    <?php 
        session_start();
        include("header.html");
        echo "Olá, ". $_COOKIE["nome"] . "! Sua senha é:" . $_SESSION["senha"];
    ?>
</body>
</html>