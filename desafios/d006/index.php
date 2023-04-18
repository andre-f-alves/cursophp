<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6 | Anatomia da Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <?php
        $dividendo = $_GET["dividendo"] ?? 0;
        $divisor = $_GET["divisor"] ?? 1;
        
        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
    ?>
    
    <main>
        <h1>
            Anatomia da Divisão
        </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="dividendo">Dividendo:</label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="<?=$dividendo?>">

            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?=$divisor?>">

            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>
            Estrutura da Divisão
        </h2>

        <table class="divisao">

            <tr class="divisao">
                <td class="divisao"><?=$dividendo?></td>
                <td class="divisao"><?=$divisor?></td>
            </tr class="divisao">

            <tr>
                <td class="divisao"><?=$resto?></td>
                <td class="divisao"><?=$quociente?></td>
            </tr>

        </table>

    </section>

</body>

</html>