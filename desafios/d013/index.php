<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13 | Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img {
            height: 70px;
        }
    </style>
</head>
<body>

    <?php
        $valor = $_GET['valor'] ?? 0;

        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
    ?>

    <main>
        <h1>
            Caixa Eletrônico
        </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="valor">Valor a ser sacado (R$)<sup>*</sup>:</label>
            <input type="number" name="valor" id="valor" min="0" step="5" value="<?=$valor?>" required>

            <p style="font-size: .7em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5.</p>

            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <h2>Saque de <?=numfmt_format_currency($padrao, $valor, "BRL")?> realizado</h2>

        <?php
            $reais_100 = (int) ($valor / 100);
            $reais_50 = (int) (($valor % 100) / 50);
            $reais_10 = (int) (($valor % 50) / 10);
            $reais_5 = (int) (($valor % 10) / 5);
        ?>

        <ul>
            <li><img src="imgs/100-reais.jpg" alt="100 reais"> &times;<?=$reais_100?></li>
            <li><img src="imgs/50-reais.jpg" alt="50 reais"> &times;<?=$reais_50?></li>
            <li><img src="imgs/10-reais.jpg" alt="10 reais"> &times;<?=$reais_10?></li>
            <li><img src="imgs/5-reais.jpg" alt="5 reais"> &times;<?=$reais_5?></li>
        </ul>
    </section>
</body>
</html>