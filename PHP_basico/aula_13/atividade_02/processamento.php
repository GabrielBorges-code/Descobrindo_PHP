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
       
        <form action="tabuada.php" method="get">
            <fieldset><legend>Calculando</legend>
                <select name="num">
                    <?php
                        for($i = 1; $i <=10; $i++){

                            echo "<option>$i</option>";
                        }
                    ?>
                </select>
               <input type="submit" value="calcular">
            
            </fieldset>

        </form>

    </div>
    
</body>
</html>