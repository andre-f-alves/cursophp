<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8 | Cálculo de Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $numero = $_GET['numero'] ?? 1;
    ?>

    <main>
        <h1>Cálculo de Raízes</h1>
        <p>
            Informe um número no campo abaixo para ver suas raízes.
        </p>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>

        <?php
            $raiz_quadrada = sqrt($numero);
            $raiz_cubica = $numero ** (1/3);

            echo "<p>Análise do número <strong>$numero</strong>:</p>";
            echo "<ul>";
            echo "<li>Raiz quadrada: <strong>" . number_format($raiz_quadrada, 3, ",", ".") . "</strong></li>";
            echo "<li>Raiz cúbica: <strong>" . number_format($raiz_cubica, 3, ",", ".") . "</strong></li>";
            echo "</ul>"
        ?>

    </section>
</body>
</html>