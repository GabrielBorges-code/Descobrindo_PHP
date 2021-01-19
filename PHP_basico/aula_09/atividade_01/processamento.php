<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../_css/estilo.css">
    <title>Aula 09</title>

</head>

<body>
    <div>
        <?php
            $nome = $_GET["nome"];
            $anoNasc = $_GET["anoNasc"];
            $idade = date("Y") - $anoNasc;
            
            if($idade >= 18){
                echo "$nome você tem $idade anos de idade então pode dirigir </br>";
                    
            }else{
                echo "$nome você tem $idade anos de idade então não pode dirigir </br>";

            }

            if($idade >= 18 && $idade < 65) {
                echo " o voto é obrigatório </br>";

            }elseif($idade >= 16 && $idade < 18 || $idade > 64) {
                echo " o voto é opcional </br>";

            }elseif ($idade < 16) {
                echo " o voto não é permitido </br>";


            }


        ?>
        
        </br>

        <a href="index.html">Voltar</a>
    </div>

</body>

</html>