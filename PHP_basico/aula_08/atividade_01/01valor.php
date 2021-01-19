<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../_css/estilo.css">
    <title>Aula 08</title>
</head>
<body>
    <div>
        <?php
            $valor = $_GET["valor"];
            echo "A raiz quadrada de $valor é " . number_format(sqrt($valor), 2);
        ?>

        </br>

        <a href="index.html">Voltar</a>
    
    </div>
</body>
</html>