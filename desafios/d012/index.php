<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12 | Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $tempo_s = $_GET['segundos'] ?? 0;
    ?>

    <main>
        <h1>Calculadora de Tempo</h1>
        <p>
            Informe o tempo em segundos para var sua equivalência.
        </p>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="segundos">Tempo (segundos):</label>
            <input type="number" name="segundos" id="segundos" min="0" step="1" value="<?=$tempo_s?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado do Cálculo</h2>

        <?php
            $semanas = (int) ($tempo_s / 604800);
            $dias = (int) (($tempo_s % 604800) / 86400);
            $horas = (int) (($tempo_s % 86400) / 3600);
            $minutos = (int) (($tempo_s % 3600) / 60);
            $segundos = $tempo_s % 60;

            echo "<ul>";
            echo "<li>Semanas: $semanas</li>";
            echo "<li>Dias: $dias</li>";
            echo "<li>Horas: $horas</li>";
            echo "<li>Minutos: $minutos</li>";
            echo "<li>Segundos: $segundos</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>