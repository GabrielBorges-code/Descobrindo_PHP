<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Atividade 16</title>

    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>

    <div>
        <?php
            $produto = "Abacate";
            $preco = 3.5;

            // forma mais comum atualmente
            echo "<p>echo: O $produto custa R$" . number_format($preco, 2) . "</p>";

            //forma antiga, %s = string e %.2f = casas decimais e float, %d = valor decimal, %u valor sem sinal de (-)
            printf ("printf: O %s custa RS %.2f" , $produto, $preco);

            //para exibir vetores de forma organizada
            $x[0] = 5;
            $x[1] = 2; 
            $x[2] = 8;
            echo "<p> print_r: ";
            print_r($x);

            $x2 = array(14, 16, 2, 12,);
            echo "<p> print_r: ";
            print_r($x2);

            //var dump e var_export
            echo "<p> var_dump: ";
            var_dump($x);
            echo "<p> var_export: ";
            var_export($x2);

            //wordwrap, Cria quebras de linha ou divisões em uma string em um tamanho especificado.
            $txt = "Este texto é grande, teste para testar a função wordwrap, não sei se está funcionando de forma satisfatória";
            $res = wordwrap($txt, 20, "<br>\n", false);
            echo "<p> wordwrap: $res </p>";

            //strlen, Permite verificar o tamanho de uma string, contando seus caracteres (inclusive espaços em branco)
            $txt2 = "Curso em video";
            $tamanho = strlen($txt2);

            echo "<p>strlen: $tamanho</p>";

            //trim, Elimina espaços em branco antes e depois de uma string.
            $nome = "   José Perneta   ";
            echo "<p> strlen: " . $nome . strlen($nome);

            echo "<p> trim: " . $nome . strlen(trim($nome));

            //str_word_count, Conta quantas palavras uma string possui.
            $frase = "Gabriel é um programador";
            $count = str_word_count($frase, 0);

            echo "<p>str_word_count: $count";

            //explode, Quebra uma string e coloca os itens em um vetor.
            $site = "Eu sou programador";
            $vetor = explode(" ", $site);

            echo "<p>explode: ";
            print_r($vetor);

            //str_split() : Coloca cada letra de uma string em uma posição de um vetor.
            $nome2 = "Camila";
            $vetor2 = str_split($nome2);
            echo "<p>str_split: ";
            print_r($vetor2);

            //implode() : Transforma um vetor inteiro em uma string.
            $a[0] = "Curso";
            $a[1] = "em";
            $a[2] = "Video";

            $juncao = implode(" ", $a);

            echo "<p>implode: ";
            print($juncao);

            //chr() : Retorna um caractere de acordo com seu código ASCII passado como parâmetro.
            echo "<p>chr: ";
            $letra = chr(65);
            echo "A letra de código 13 é " . $letra;

            //ord() : Retorna o código ASCII de um caractere passado como parâmetro.
            echo "<p>ord: ";
            $letra2 = "J";
            echo "A código da letra J é " . ord($letra2);

        
        ?>
    </div>
    
</body>
</html>