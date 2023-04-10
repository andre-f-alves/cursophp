<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos do PHP</title>
</head>
<body>
    <?php
        /* 
            0x = hexadecimal
            0b = binário
            0 = octal
        */
        $num = 300;
        $hex = 0x1A;
        $bin = 0b1011;
        $oct = 010;
        // echo "O valor  da variável é $oct";
        
        $var = true;
        $var2 = "André";
        // var_dump($var);
        
        $pot = (int) 3e2; // 3 x 10 ^ 2 (coerção)
        // echo "O valor é $pot ";
        // var_dump($pot);
        
        
        // Tipo composto - array
        $vetor = [6, 2.5, "André", true];
        // var_dump($vetor)

        
        // Tipo composto - object
        class Pessoa {
            private string $nome;
        }
        
        $pessoa = new Pessoa;
        var_dump($pessoa);
    ?>
</body>
</html>