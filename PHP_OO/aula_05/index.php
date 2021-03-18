<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Conta.php';
            // $conta1 = new Conta("123", "Poupança", "Gabriel");
            $conta1 = new Conta();

            $conta1->abrirConta("Poupança");

            print_r($conta1);


        ?>
    
    </pre>
</body>
</html>