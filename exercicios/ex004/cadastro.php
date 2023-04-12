<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>

    <main>
        <?php
            $nome = $_GET["nome"] ?? "desconhecido";
            $sobrenome = $_GET["sobrenome"] ?? "sem sobrenome";
            echo "<p>Olá, $nome $sobrenome! É um prazer te conhecer! Este é o meu site.</p>";
        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar à página anterior.</a>
        </p>
    </main>
</body>

</html>