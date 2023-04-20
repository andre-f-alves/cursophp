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
            width: 50%;
            height: 50%;
        }

        .peq {
            width: 25%;
            height: 25%;
        }
    </style>
</head>
<body>

    <?php
        $valor = $_GET['valor'] ?? 0;
    ?>

    <main>
        <h1>
            Caixa Eletrônico
        </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="valor">Valor a ser sacado (R$)*:</label>
            <input type="number" name="valor" id="valor" value="<?=$valor?>">

            <!-- <p style="font-size: .8em;">*Notas disponíveis: R$100, R$50, R$10 e R$5.</p> -->

            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <h2>Saque de <?=$valor?> realizado</h2>

        <?php
            $reais_100 = (int) ($valor / 100);
            $reais_50 = (int) (($valor % 100) / 50);
            $reais_20 = (int) (($valor % 100 % 50) / 20);
            $reais_10 = (int) (($valor % 100 % 50 % 20) / 10);
            $reais_5 = (int) (($valor % 100 % 50 % 20 % 10) / 5);
            $reais_2 = (int) (($valor % 100 % 50 % 20 % 10 % 5) / 2);
            $real_1 = (int) (($valor % 100 % 50 % 20 % 10 % 5 % 2) / 1);
        ?>

        <ul>
            <li><img src="imgs/100-reais.jpg" alt="100 reais"> &times;<?=$reais_100?></li>
            <li><img src="imgs/50-reais.jpg" alt="50 reais"> &times;<?=$reais_50?></li>
            <li><img src="imgs/20-reais.jpg" alt="20 reais"> &times;<?=$reais_20?></li>
            <li><img src="imgs/10-reais.jpg" alt="10 reais"> &times;<?=$reais_10?></li>
            <li><img src="imgs/5-reais.jpg" alt="5 reais"> &times;<?=$reais_5?></li>
            <li><img src="imgs/2-reais.jpg" alt="2 reais"> &times;<?=$reais_2?></li>
            <li><img src="imgs/1-real.jpg" alt="1 real" class="peq"> x<?=$real_1?></li>
        </ul>
    </section>
</body>
</html>