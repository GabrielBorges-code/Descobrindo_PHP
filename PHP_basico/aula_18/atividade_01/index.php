<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Atividade 18</title>

    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>

    <div>
        <pre>
            <?php
                $a = array(5,7,2,2,5,1);

                $a[] = 12;
                
                //forma resumida
                print_r($a);

                echo "Array: ";
                //forma tradicional de mostrar um vetor
                for ($i = 0; $i <= count($a); $i++){
                    echo " " . $a[$i];
                }

                echo "<p>Range: </p>";
                //1 numero inicial, 2 numero final, o passo da contagem
                $b = range(3, 17, 4);

                print_r($b);

                //foreach para cada valor
                echo "<p>foreach: </p>";
                $d = array(12, 5, 0, 3, 7, 85);
                
                foreach($d as $valor){
                    echo "<p>$valor </p>";
                }

            
            ?>
        </pre>
    </div>
    
</body>
</html>