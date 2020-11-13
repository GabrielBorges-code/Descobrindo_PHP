<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Aula 06</title>
</head>
<body>
    <div>
        <?php
            $x = "abc";
            $$x = "def";
            
            echo "O conteudo da variavel X é $x";
            echo "</br> A variavel criada recebeu o valor de $abc";
            
        ?>
    </div>
</body>
</html>