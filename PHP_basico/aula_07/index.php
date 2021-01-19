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
            $valor1 = $_GET["a"];
            $valor2 = $_GET["b"];
            $valor3 = $_GET["op"];

            $valor4 = $valor3 == "multi" ? $valor1 * $valor2 : $valor1 + $valor2; 
            
            echo "O valor $valor1 e $valor2 = $valor4";
        
        ?>
    </div>
</body>
</html>