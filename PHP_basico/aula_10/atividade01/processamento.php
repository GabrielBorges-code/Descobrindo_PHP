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
            
            $numberInput = $_GET["numberInput"];
            $math = $_GET["math"];

            switch($math){

                case("double") : 
                    echo "o dobro de $numberInput é " . $numberInput * 2;
                    break;

                case("cube") :
                    echo "o cubo de $numberInput é " . pow($numberInput, 2);
                    break;

                case("root") :
                    echo "a raiz quadrada de $numberInput é " . sqrt($numberInput); 
                    break;
                default :
                    echo "Erro! Escolha um valor válido";

            }
            
        ?>
        
        <br>

        <a href="index.html">Voltar</a>
    </div>

</body>
</html>