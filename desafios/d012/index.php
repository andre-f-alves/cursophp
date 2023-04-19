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
        $segundos = $_GET['segundos'];
    ?>

    <main>
        <h1>Calculadora de Tempo</h1>
        <p>
            Informe o tempo em segundos para var sua equivalência.
        </p>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="segundos">Tempo (segundos):</label>
            <input type="number" name="segundos" id="segundos" value="<?=$segundos?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado do Cálculo</h2>

        <?php
            $semanas = (int) ($segundos / 604800);
            $dias = (int) (($segundos % 604800) / 86400);
            $horas = (int) (($segundos % 86400) / 3600);
            $minutos = (int) (($segundos % 3600) / 60);
            $restante = $segundos % 60;

            echo "<ul>";
            echo "<li>Semanas: $semanas</li>";
            echo "<li>Dias: $dias</li>";
            echo "<li>Horas: $horas</li>";
            echo "<li>Minutos: $minutos</li>";
            echo "<li>Segundos: $restante</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>