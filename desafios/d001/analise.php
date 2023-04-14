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
        <?php
            $numero = $_GET["numero"] ?? 0;
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "<p>O número informado foi <strong>$numero</strong>.</p>";
            echo <<< resposta
            <p>
                Número antecessor: <strong>$antecessor</strong>
                <br>
                Número sucessor: <strong>$sucessor</strong>
            </p>
            resposta;
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
    </script>
</body>

</html>