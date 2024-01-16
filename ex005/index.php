<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegando dados de formulário</title>
</head>
<body>
    <h1>Formulário</h1>
    <form action="cad.php" method="get">
        <label for="nome">Nome:</label>
        <input type="text" id="input_nome" name="nome">
       
        <label for="sobrenome">Sobrenome</label>
        <input type="text" id="input_sobrenome" name="snome">
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>