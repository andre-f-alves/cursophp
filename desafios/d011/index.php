<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11 | Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        $preco = $_GET['preco'] ?? 0;
        $percentual = $_GET['percentual'] ?? 0;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="preco">Preço do produto (R$):</label>
            <input type="number" name="preco" id="preco" step="0.01" value="<?=$preco?>">

            <label for="percentual">Percentual de reajuste (<strong><output id="valor"><?=$percentual?></output>%</strong>):</label>
            <input type="range" name="percentual" id="percentual" oninput="valor.innerHTML = Number(percentual.value)" value="<?=$percentual?>" style="padding-left: 0; padding-right: 0;">

            <input type="submit" value="Calcular Reajuste">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        
        <?php
            $reajuste = $preco * (1 + $percentual / 100);

            echo "<p>Com <strong>$percentual% de aumento</strong>, o produto de " . numfmt_format_currency($padrao, $preco, "BRL") . " passa a custar <strong>" . numfmt_format_currency($padrao, $reajuste, "BRL") . "</strong>.</p>";
        ?>
    </section>
</body>
</html>