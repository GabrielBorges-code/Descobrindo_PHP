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
            $num = isset($_GET["num"]) ? $_GET["num"] : 1;

            $divisores = 0;
            
            echo "O número $num é primo? <br>";
       
            for ($i = 1; $i <= $num; $i++){
                if($num % $i == 0){
                    $divisores++;

                }

            }

            if($divisores == 2){
                echo "O número <strong>$num</strong> é primo <br> Ele possuí $divisores divisores";
            }else{
                echo "O número <strong>$num</strong> valor não é primo <br> Ele possuí $divisores divisores";
            }

        ?>

        <br>

        <a href="javascript:history.back()">Voltar</a>

    </div>
    
</body>
</html>