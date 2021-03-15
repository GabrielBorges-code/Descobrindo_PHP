<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aula 04 - POO</title>

</head>
<body>
    <pre>
       <?php
            require_once 'Caneta.php';
            // forma padrão de acesso
            // $c1 = new Caneta();
            //definindo valores do contrutor
            $c1 = new Caneta("Bic", "Preta", 0.8);
            $c2 = new Caneta("Compactor", "Verde", 0.5);

            print_r($c1);
            print_r($c2);

            // $c2 = new Caneta();
            
            // //é possível fazer o set de duas formas (depende da visibilidade do atributo)
            // $c1->setModelo("Bic"); 
            // $c2->modelo = "Compactor";

            // //aqui não é possível pois esá privado
            // $c1->setPonta(0.5);
            // $c2->setPonta(0.8);

            // echo "eu tenho uma caneta (c1) modelo " . $c1->getModelo() . " de ponta " . $c1->getPonta();

       ?>

    </pre>
</body>
</html>