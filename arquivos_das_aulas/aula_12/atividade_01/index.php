<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../_css/estilo.css">

    <title>Aula 12</title>
</head>
<body>

    <div>
        <?php

            $num = 1;
            $num2 = 10;

            $incremento = 3;

            do {
                
                echo $num++ . " ";
            }while ($num <= 10);
            
            echo "<br>";

            do {
                echo $num2-- . " ";
            }while ($num2 >= 1);

        ?>
    </div>
    
</body>
</html>