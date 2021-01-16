<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Atividade 15</title>

    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <?php
        // passagem por referencia
            function teste(&$a){
               return $a += 2;     
            }        
            $y = 3;
            teste($y);
            echo "variável {$y} e função " . teste($y);
            // variável 5 e função 7

        // passagem por valor

            function teste2($b){
                return $a += 2;     
             }        
             $z = 3;
             teste($y);
             echo "variável {$z} e função " . teste($z);
            // variável 3 e função 5

            
        ?>
    </div>
</body>
</html>