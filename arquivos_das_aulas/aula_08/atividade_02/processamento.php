<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../_css/estilo.css">
    <title>Document</title>
</head>
<body> 
    <div>
        <?php
            $nome = isset($_GET["nome"]) ? $_GET["nome"] : "Nome não informado";
            $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "Sexo não informado";
            $ano = isset($_GET["anoNasc"]) ? $_GET["anoNasc"] : "Ano não informado ";
            $idade = (date("Y") - $ano);

            echo "<p>$nome do sexo $sexo que tem $idade anos de idade ";

        ?>

        <p>
            <a href="index.html">Voltar</a>

        </p>
    </div>
    
</body>
</html>