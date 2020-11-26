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
        <form action="index.php" method="get">
            <fieldset>
                
                <?php
                    $num = 1;
                    while ($num <= 5){
                        echo "Valor $num <input type='number' name='numero$num' id='numero$num min='0' max='100'> <br>";
                        $num++;
                    }
        
                
                ?>
                       
                <br>

                <input type='submit' value='Gerar'>
            </fieldset>

        </form>
        

        

    </div>
</body>
</html>