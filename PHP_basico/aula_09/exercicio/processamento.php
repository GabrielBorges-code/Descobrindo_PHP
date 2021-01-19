<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../_css/estilo.css">
    <title>Exercicio aula 09</title>

    <style>
        span.aprovado{
            color: green;
        }
        span.reprovado{
            color: red;
        }
        span.recuperacao{
            color: darkorange;
        }
    </style>

</head>
<body>
    <div>
        <?php
            $nota1 = $_GET["nota1"];
            $nota2 = $_GET["nota2"];
            $media = number_format(($nota1 + $nota2) / 2, 1);

            if($nota1 == null && $nota2 == null){
                echo "Por favor digitar valores válidos";
                
            }else if ($media >= 7 && $media <= 10){
                echo "A média entre <span class='aprovado'>$nota1</span> e <span class='aprovado'>$nota2</span> é <span class='aprovado'>$media</span> </br> Você está <span class='aprovado'>aprovado</span>";

            }else if ($media >= 5 && $media <= 6) {
                echo "A média entre <span class='recuperacao'>$nota1</span> e <span class='recuperacao'>$nota2</span> é <span class='recuperacao'>$media</span> </br> Você está de <span class='recuperacao'>recuperação </span>";
            }else{
                echo "A média entre <span class='reprovado'>$nota1</span> e <span class='reprovado'>$nota2</span> é <span class='reprovado'>$media</span> </br> Você está de <span class='reprovado'>reprovado </span>";
            }

        ?>

        </br>
        
        <a href="index.html">Voltar</a>
    </div>
</body>
</html>