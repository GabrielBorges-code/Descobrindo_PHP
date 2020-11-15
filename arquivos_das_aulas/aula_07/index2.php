<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Aula 07</title>
</head>
<body>
    <div>
        <?php
            $a = 3;
            $b = "3";

            $c = ($a == $b) ? "sim" : "não";
            $d = ($a === $b) ? "sim" : "não";

            echo "Variável a $a e variável b $b são iguais? Resposta variavel C <strong>$c</strong>; Resposta variavel D <strong>$d</strong>";

        ?>
    </div>
    
</body>
</html>