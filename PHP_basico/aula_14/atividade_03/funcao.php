<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../_css/estilo.css">

    <title>Aula 14</title>

</head>
<body>

    <div>
        <?php

            function soma (){
                $p = func_get_args();
                $tot = func_num_args();
                $s = 0;
                for ($i = 0; $i < $tot; $i++){
                    $s += $p[$i];
                }
                return $s;
            }

            $res = soma(15, 16, 17, 18, 2);
            echo "$res";
        ?>

    </div>
    
</body>
</html>