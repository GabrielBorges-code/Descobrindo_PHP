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
            $numero = isset ($_GET["numero"]) ? $_GET["numero"] : 3;
            
            echo "<fieldset><legend>Calculando a fatorial</legend>";

            echo "Fatorial de  <strong>$numero</strong> <p>$numero";
        
           
            $cont = $numero;
            $fatorial = 1;

            do{
                $fatorial = $fatorial * $cont;
                $cont--;

            }while ($cont >= 1);

            echo "<h1>$numero != $fatorial</h1>";


        ?>

        <a href="index.html">Voltar</a>

    </div>
    
</body>
</html>