<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10 | Cálculo de Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        $ano_atual = date("Y");
        $nascimento = $_GET['nascimento'] ?? 2000;
        $ano = $_GET['ano'] ?? $ano_atual;
    ?>
    
    <main>
        <h1>Cálculo de Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="nascimento">Ano de Nascimento:</label>
            <input type="number" name="nascimento" id="nascimento" min="1" max="<?=($ano_atual - 1)?>" value="<?=$nascimento?>">

            <label for="ano">Ano (ano atual: <?=$ano_atual?>):</label>
            <input type="number" name="ano" id="ano" min="<?=$ano_atual?>" value="<?=$ano?>">

            <input type="submit" value="Calcular Idade">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>

        <?php
            $idade = $ano - $nascimento;

            echo "<p>Ano de nascimento: $nascimento<br> Idade em $ano: <strong>$idade anos</strong></p>";
        ?>
    </section>
</body>
</html>