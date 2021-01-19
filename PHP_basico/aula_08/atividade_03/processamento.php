<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
        $texto = isset($_GET["texto"]) ? $_GET["texto"] : "Texto generico";
        $tamanho = isset($_GET["tamanho"]) ? $_GET["tamanho"] : "12pt";
        $cor = isset($_GET["color"]) ? $_GET["color"] : "#000000";    
    ?>

    <style>
        span.texto{
            font-size: <?php echo $tamanho; ?>;
            color: <?php echo $cor; ?>;

        }
    </style>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../_css/estilo.css">
    <title>Aula 08</title>
</head>
<body> 
   
    <div>

        <?php
            echo "<span class='texto'> $texto </span>";
        
        ?>

        </br>
        
        <a href="index.html">Voltar</a>

    </div>
    
</body>
</html>