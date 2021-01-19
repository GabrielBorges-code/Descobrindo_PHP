<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Aula 05</title>
</head>
<body>
<div>
    <?php 
        $num1 = $_GET["a"];
        $num2 = $_GET["b"];
        echo "Temos os valores <strong>$num1 e $num2</strong> ";
        echo "</br> Valor da soma " . ($num1 + $num2);
        echo "</br> Valor da subtração " . ($num1 - $num2);
        echo "</br> Valor da multiplicação ". ($num1 * $num2);
        echo "</br> Valor da divisão ". number_format(($num1 / $num2), 2); //number format limita a quatidade decimais
        echo "</br> Valor da resto da divisão ". ($num1 % $num2);
        
        echo "</br> -- Funções --";

        echo "</br> Valor absoluto (remove o negativo) $num2 " . abs($num2);
        echo "</br> Potenciação de $num1<sup>$num2</sup> " . pow($num1, $num2);
        echo "</br> Raiz quadrada de $num1 é " . sqrt($num1);
        echo "</br> Arredondamento de $num2 é " . round($num2); //ceil arredonda para cima floor arredonda para baixo
        echo "</br> Valor inteiro da variável $num1" . intval($num1); //pega somente a parte inteira
    ?>

</div>
</body>
</html>