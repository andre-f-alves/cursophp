<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2 | Sorteador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>
            Sorteador de Números
        </h1>
        <?php
            $min = 0;
            $max = 100;
            $numero = mt_rand($min, $max);
            echo "<p>Gerando um número entre <strong>$min</strong> e <strong>$max</strong>.</p>";
            echo "<p>Número sorteado: <strong>$numero</strong></p>";
        ?>
        <button onclick="javascript:window.location.reload()">Sortear</button>
    </main>    
</body>

</html>