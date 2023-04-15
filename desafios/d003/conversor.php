<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3 | Conversor de Moedas Simples</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>
            Resultado da conversão
        </h1>
        <?php
            $cotacao = 4.91;
            $real = $_GET["real"];
            $dolar = $real / $cotacao;
            
            /* 
                Formatação com 'number_format()'
            */
            // echo "<p>R$" . number_format($real, 2, ",", ".") . " equivalem a US$" . number_format($dolar, 2, ",", ".") . "</p>";
            

            /* 
                Formatação internacional com a biblioteca 'intl'
            */   
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p><strong>" . numfmt_format_currency($padrao, $real, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong>*.</p>";

            echo "<p>*Cotação fixa de <strong>" . numfmt_format_currency($padrao, $cotacao, "BRL") . "</strong>.</p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>