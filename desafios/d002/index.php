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
            /*
                Funções para números aleatórios:
                
                - 'rand()': algoritmo Linear Congrential Generator (1951)
                
                - 'mt_rand()': algoritmo Mersenne Twister (1997)
                
                - 'random_int()': números aleatórios criptografados
            */

            $numero = mt_rand(0, 100);
            echo "<p>Gerando um número entre <strong>0</strong> e <strong>100</strong>.</p>";
            echo "<p>Número gerado: <strong>$numero</strong></p>";
        ?>
        <button onclick="javascript:window.location.reload()">Sortear</button>
    </main>
</body>

</html>