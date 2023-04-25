<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9 | Cálculo de Média</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $valor1 = $_GET['valor1'] ?? 0;
        $valor2 = $_GET['valor2'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 1;
        $peso2 = $_GET['peso2'] ?? 1;
    ?>

    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="valor1">1º Valor:</label>
            <input type="number" name="valor1" id="valor1" min="0" step="0.01" required value="<?=$valor1?>">
            
            <label for="peso1">1º Peso:</label>
            <input type="number" name="peso1" id="peso1" min="1" required value="<?=$peso1?>">
            
            <label for="valor2">2º Valor:</label>
            <input type="number" name="valor2" id="valor2" min="0" step="0.01" value="<?=$valor2?>">
            
            <label for="peso2">2º Peso:</label>
            <input type="number" name="peso2" id="peso2" min="1" required value="<?=$peso2?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>

        <?php
            $media_simples = ($valor1 + $valor2) / 2;
            $media_ponderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);

            echo "<p>Análise dos valores $valor1 e $valor2:</p>";
            echo "<ul>";
            echo "<li><strong>Média Aritmética Simples</strong>: " . number_format($media_simples, 2, ",", ".") . "</li>";
            echo "<li><strong>Média Aritmética Ponderada</strong> (pesos: $peso1 e $peso2): " . number_format($media_ponderada, 2, ",", ".") . "</li>";
            echo "</ul>";
        ?>

    </section>
</body>
</html>