<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1 | Números Vizinhos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>
            Resultado do Processamento
        </h1>
        <p>
            <?php
                $numero = $_GET["numero"] ?? 0;
                echo "O número informado foi <strong>$numero</strong>.";
                echo "<br>Número antecessor: <strong>" . ($numero - 1) . "</strong>";
                echo "<br>Número sucessor: <strong>" . ($numero + 1) . "</strong>";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
    </script>
</body>

</html>