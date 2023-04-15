<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5 | Analisador de Números Reais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>
            Resultado da Análise
        </h1>
        <?php
            $numero = $_GET["numreal"];

            echo "<p>Análise do número <strong>" . number_format($numero, 3, ",", ".") . "</strong>.</p>";

            $inteiro = (int) $numero;

            // Parte decimal = número - parte inteira
            $decimal = $numero - $inteiro;

            echo "<ul><li>Parte inteira: <strong>" . number_format($inteiro, 0, ",", ".") . "</strong></li><li>Parte decimal: <strong>" . number_format($decimal, 3, ",", ".") . "</strong></li></ul>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>