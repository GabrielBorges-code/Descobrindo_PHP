<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Aula 06</title>
</head>
<body>
    <div>
        <?php
            $anoAtual = $_GET["ano"];
            $anoAtual2 = &$anoAtual;
            echo "ano atual $anoAtual2, ano anterior " . --$anoAtual . " e o ano posterior " . ++$anoAtual;    
        ?>
    </div>
</body>
</html>