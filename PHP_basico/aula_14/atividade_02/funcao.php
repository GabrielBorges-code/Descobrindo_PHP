<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../_css/estilo.css">

    <title>Aula 14</title>

</head>
<body>

    <div>
        <?php

            function soma ($a, $b){
                
                return $a + $b;;
            }

            $x = 12;
            $y =13;
            $z = soma($x, $y);

            echo "soma de $x e $y = $z";

        ?>

    </div>
    
</body>
</html>