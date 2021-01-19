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
            $anoNasc = $_GET["anoNasc"];
            $idade =  2020 - $anoNasc;

            $voto = $idade >= 18 && $idade < 65 ? "Voto é obrigatório" : "Voto não obrigatorio";    
            
            echo "A sua idade é $idade, e o  $voto";
        
        ?>
    
    </div>
</body>
</html>