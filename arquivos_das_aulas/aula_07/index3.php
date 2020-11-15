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
           $nota1 = $_GET["nota1"];
           $nota2 = $_GET["nota2"];

            $media = ($nota1 + $nota2) / 2 >= 6 ? "Aprovado" : "Reprovado";

            echo "A média do aluno foi " . ($nota1 + $nota2) / 2 . " e ele está $media";    


        ?>
    </div>
</body>
</html>