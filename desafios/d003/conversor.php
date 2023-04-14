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
            $dolar = 4.91;
            $reais = (float) $_GET["reais"];

            $conversao = $reais * $dolar;

            echo "R$$reais = US$$conversao";
        ?>
    </main>
</body>
</html>