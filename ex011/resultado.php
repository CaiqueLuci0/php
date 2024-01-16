<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor convertido</title>
</head>

<body>
    <?php
    $valorDigitado = $_GET["numero"] ?? 0;
    $diaAtual = date("m/d/Y");
    $inicio = date("m/d/Y", strtotime("-7 days"));
    $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='$inicio'&@dataFinalCotacao='$diaAtual'&\$top=1&\$orderby=dataHoraCotacao%20desc&\$format=json&\$select=cotacaoCompra,dataHoraCotacao";

    $dados = json_decode(file_get_contents($url), true);

    $cotacao = $dados["value"][0]["cotacaoCompra"];
    $convercao = $valorDigitado / $cotacao;

    $padrao = numfmt_create("pt_br", numberformatter::CURRENCY);
    print "O seus " . numfmt_format_currency($padrao,$valorDigitado,"BRL") . " ao passar pela cotação em dolar de $cotacao, equivalem a " . numfmt_format_currency($padrao, $convercao, "USD");
    ?>
    <br>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>

</html>