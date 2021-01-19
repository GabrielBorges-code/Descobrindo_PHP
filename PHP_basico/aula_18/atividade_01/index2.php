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
              //atribuindo uma chave para o vetor, caso eu não atribua uma chave para o indice o php que vai gerir
              $v = array(50=>"Pimbas", 1=>"A", 3=>"J",17=>"pipoca");
              $v[] = 12;

              foreach ($v as $total){
                  echo " $total";
              }

              //unset destroí uma posição do vetor
              unset($v[1]);
              print_r ($v);

              //vetores também podem ser strings
              $nome = array("nome"=>"Gabriel", "idade"=>"22", "peso"=>"112");
              $nome["fuma"] = true;

              foreach($nome as $campo => $valor){
                  echo "$campo: $valor <br>";
              }

              print_r ($nome);
            
            ?>
        </pre>
    </div>
    
</body>
</html>