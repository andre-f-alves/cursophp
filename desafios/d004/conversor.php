<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4 | Conversor de Moedas v2.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>
            Resultado da Conversão
        </h1>
        <?php
            // Definição da data atual e da data de início (7 dias atrás)
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            // URL do banco de dados do Banco do Brasil (data modificada para corresponder ao período atual)
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            // Tratamento de dados json
            $dados = json_decode(file_get_contents($url), true);

            // Captura da cotação
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            // Cálculo da cotação
            $real = $_GET["real"];
            $dolar = $real / $cotacao;

            $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

            echo "<p><strong>" . numfmt_format_currency($padrao, $real, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong>*.</p>";

            echo "<p>*Cotação baseada na API do Banco Central do Brasil.</p>"
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>