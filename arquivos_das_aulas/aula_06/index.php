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
            $preco = $_GET["p"];
            echo "O preço recebido R$ " . number_format($preco, 2);
            $preco = (10/100) * $preco;
            echo "</br> com 10% de aumento de " . number_format($preco);
        ?>

    </div>
</body>
</html>