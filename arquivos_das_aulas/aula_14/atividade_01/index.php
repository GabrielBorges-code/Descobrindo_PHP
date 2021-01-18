<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../_css/estilo.css">

    <title>Aula 14</title>
</head>
<body>
<!-- forma sem retorno -->
    <div>
        <?php
            function soma($a, $b){
                $s = $a + $b;
                echo "<p>A soma vale $s</p>";
            }

            soma(15, 16);
            soma(5, 2);

            $x = 15;
            $y = 333;

            soma($x, $y);
        ?>

    </div>
    
</body>
</html>