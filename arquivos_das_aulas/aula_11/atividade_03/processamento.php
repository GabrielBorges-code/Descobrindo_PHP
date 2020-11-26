<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../_css/estilo.css">

    <title>Aula 11</title>
</head>
<body>
    <div>
        <fieldset>

            <?php

                $inicio = $_GET["inicio"];
                $final = $_GET["final"];
                $incremento = $_GET["incremento"];

                if($inicio > $final){

                    while($inicio >= $final){
                        echo $inicio . " ";
                        $inicio -= $incremento;
                    }

                    }else if($inicio < $final){
                        
                        while($inicio <= $final){
                            echo $inicio . " ";
                            $inicio += $incremento;
                        }
                    
                    }else {
                        echo "Numeros iguais não vai ser possível calcular";    
                    }

                    
            ?>
             <a href="index.html">Voltar</a>
        </fieldset>
    </div>
</body>
</html>