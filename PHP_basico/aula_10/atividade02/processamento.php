<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../arquivos_das_aulas/_css/estilo.css">

    <title>Aula 10</title>

</head>
<body>

    <div>
        <?php
            
          $dayOfWeek = $_GET["dayOfWeek"];

          echo "$dayOfWeek ";

          switch($dayOfWeek){
                case("segunda-feira") : 
                case("terca-feira") : 
                case("quarta-feira") : 
                case("quinta-feira") : 
                case("sexta-feira") : 
                    echo "você deve ir a aula";
                    break;

                case("sabado") :
                case("domingo") :
                    echo "você pode ficar em casa";
                    break; 
                default : echo "selecione uma opção válida";
                
          }
            
        ?>
        
        <br>

        <a href="javascript:history.go(-1)">Voltar</a>
    </div>

</body>
</html>