<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=z, initial-scale=1.0">

    <link rel="stylesheet" href="../../_css/estilo.css">


    <title>Aula 11</title>
</head>
<body>
    <div>
        <?php

            echo "<p>Contando de 0 a 1</p>";

            $num = 1;
            $num2 = 10;

            echo "Contagem crescente <br>";

            while($num <= 10){
                echo $num++ . " ";
            }
            echo "<br>";

            echo "Contagem decrescente <br>"; 

            while ($num2 >= 1){
                echo $num2-- . " ";

            }
        ?>
    
    </div>

</body>
</html>