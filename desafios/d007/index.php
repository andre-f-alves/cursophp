<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7 | Análise de Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        $salario = $_GET['salario'] ?? 0;
        $salario_min = 1320;

        $padrao = numfmt_create('pt-BR', NumberFormatter::CURRENCY);
    ?>
    
    <main>
        <h1>Análise de Salário</h1>
        <p>
            Informe seu salário no campo abaixo
        </p>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="salario">Salário (R$):</label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?=$salario?>">

            <p>Considerando salário mínimo de <strong><?=numfmt_format_currency($padrao, $salario_min, "BRL")?></strong></p>
            
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        
        <?php
            $quantidade_salarios = intdiv($salario, $salario_min);
            // restante = salário - (quantidade de salários * salário minímo) = salário % salário mínimo
            $restante = fmod($salario, $salario_min);

            echo "<p>Um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " é equivalente a <strong>$quantidade_salarios salário(s) mínimo(s) + " . numfmt_format_currency($padrao, $restante, "BRL") . "</strong>.</p>";
        ?>
    </section>
</body>
</html>