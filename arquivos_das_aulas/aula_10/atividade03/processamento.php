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
            
            $estadoSelecionado = $_GET["estado"];

            switch($estadoSelecionado){
                case (DF) : 
                case (GO) : 
                case (MS) : 
                case (MT) : 
                    
                    echo "Região <strong>Centro Oeste</strong>";
                    break;

                case (RR) :
                case (AP) :
                case (AM) :
                case (PA) :
                case (TO) :
                case (AC) :
                case (RO) :
                    
                    echo "Região <strong>Norte</strong>";
                    break;

                case (MA) :
                case (PI) :
                case (BA) :
                case (CE) :
                case (RN) :
                case (PB) :
                case (PE) :
                case (AL) :
                case (SE) :
                
                    echo "Região <strong>Nordeste</strong>";
                    break;

                case (MG) :
                case (SP) :
                case (RJ) :
                case (ES) :
            
                    echo "Região <strong>Sudeste</strong>";
                    break;

                case (PR) :
                case (SC) :
                case (RS) :
        
                    echo "Região <strong>Sul</strong>";
                    break;

                default : 
                    echo "Opção inválida, por favor selecione um estado";
            }
         
            
        ?>
        
        <br>

        <a href="javascript:history.go(-1)">Voltar</a>
    </div>

</body>
</html>