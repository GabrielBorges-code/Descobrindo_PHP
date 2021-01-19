<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../_css/estilo.css">

    <title>Aula 14</title>
</head>
<body>
<!-- forma com retorno -->
    <div>
        <?php
          function multiplicacao($x, $y){
            return $x * $y;


          }
          $resul = multiplicacao(17, 3);
          echo "A multiplicação é igual a $resul";
        ?>

    </div>
    
</body>
</html>