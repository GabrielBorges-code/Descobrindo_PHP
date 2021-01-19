<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Atividade 19</title>

    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>

    <div>
        <pre>
            <?php
                //print_r() exibe qualquer forma de coleção(matrizes, arrays etc..)
                $ve = array("J", "K", "L", "B");
                print_r($ve);

                $ve[] = "A";
                print_r($ve);

                //array_push() serve para adicionar um elemento ao vetor
                array_push($ve, "T");
                print_r($ve);

                //array_pop() elimina o último elemento do vetor
                array_pop($ve);
                print_r($ve);

                //array_unshift() adiciona um elemento ao inicio de um vetor
                array_unshift($ve, "O");
                print_r($ve);

                //array_shift() remove o primeiro item do vetor
                array_shift($ve);
                print_r($ve);

                //ordenacao de vetor
                $ve2 = array (7, 15, 3, 1, 2, 9);
                print_r($ve2);

                //asort faz a ordenação crescente de string e numeros mas matém o indice/chave original
                asort($ve2);
                print_r($ve2);

                //arsort rdenando de forma descrecentemas matém o indice/chave original
                arsort($ve2);
                print_r($ve2);

                //ksort ordenando pela chave/indice
                ksort($ve2);
                print_r($ve2);

                //krsort ordenando de forma descrescente pela chave/indice
                krsort($ve2);
                print_r($ve2);

                //sort faz a ordenação crescente de string e numeros
                sort($ve2);
                print_r($ve2);
                
                //rsort ordenando de forma descrecente
                rsort($ve2);
                print_r($ve2);

          
            ?>

        </pre>
    </div>
    
</body>
</html>