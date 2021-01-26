<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aula 02 - POO</title>

</head>
<body>
    <pre>
        <?php
            
            require_once 'Caneta.php';

            $caneta1 = new Caneta;
            
            $caneta1 -> modelo = "BIC cristal";
            $caneta1 -> cor = "Preto";
            
            $caneta1 -> rabiscar();

            //é possivel acessar variáveis privadas através de funções públicas
            $caneta1 -> tampar();

            print_r($caneta1);


        ?>
    </pre>
</body>
</html>