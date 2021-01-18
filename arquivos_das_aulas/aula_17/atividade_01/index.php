<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Atividade 17</title>

    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>

    <div>
        <?php

            $nome = "Gabriel Borges";
            $nome2 = "gabriel borges";
            //strtolower deixa tudo em mínusculo
            echo "<p>strtolower: Seu nome é: ". strtolower($nome) . "</p>";

            //strtoupper deixa tudo em máiusculo
            echo "<p>strtoupper: Seu nome é: ". strtoupper($nome) . "</p>";

            //ucfirts deixa a primeira letra em máiusculo
            echo "<p>ucfirts: Seu nome é: ". ucfirst($nome2) . "</p>";

            //ucwords deixa as primeiras letra em máiusculo
            echo "<p>ucwords: Seu nome é: ". ucwords($nome2) . "</p>";

            //strrev inverte a posição das letras
            echo "<p>strrev: Seu nome é: ". strrev($nome) . "</p>";

            //strpos, encontra a posição onde está escrito a palavra
            $frase = "Estou aprendendo PHP e é muito legal estudar PHP";
            echo "<p>strpos:" . strpos($frase, "PHP") . "</p>";

            //stripos, encontra a posição onde está escrito a palavra e ignora a caixa se está em maiusculo ou nao
            echo "<p>stripos:" . stripos($frase, "php") . "</p>";

            //substr_count conta quantas vezes uma palavra foi encontrada
            echo "<p>substr_count: " . substr_count($frase, "PHP") . "</p>";

            //substr
            $site = "Curso em video";
            $sub = substr($site, 0, 5);

            echo "<p>substr: " .$sub . "</p>";

            //str_repeat(): Faz com que a variável seja repetida
            echo "<p>str_repeat: " .str_repeat($nome, 5) . "</p>";

            //str_replace(): substitui valores por outro.
            $teste = "eu amo estudar fisica";
            echo "<p>str_replace: " .str_replace("amo", "odeio", $teste) . "</p>";
            





           
        
        ?>
    </div>
    
</body>
</html>