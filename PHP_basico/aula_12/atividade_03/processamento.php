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
            $num = $_GET["valores"];
            $inc = 1;
            echo "<p>Mostrando a tabuado do <strong>$num</strong></p>";

            do{
                echo "$num * $inc = " . $num * $inc . "<br>";
                $inc++;

            }while($inc <=10);

            
        ?>

        <a href="index.html">Voltar</a>

    </div>
    
</body>
</html>