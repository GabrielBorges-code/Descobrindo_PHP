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
            $caneta1 -> cor = "preta";
            $caneta1 -> ponta = 0.5;
            $caneta1 -> tampada = true;
            $caneta1 -> destampar();
            $caneta1 -> rabiscar();

            //formas de mostrar o estado do objeto
            //var_dump($caneta1);
            print_r($caneta1);

            echo "</br>";

            $caneta2 = new Caneta;

            $caneta2 -> modelo = "bic";
            $caneta2 -> cor = "azul";
            $caneta2 -> ponta = 0.7;
            $caneta2 -> carga = 20;
            $caneta2 -> tampar();
            $caneta2 -> rabiscar();

            print_r($caneta2);


        ?>
    </pre>
</body>
</html>