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
            echo "<br/>";

            $conta1 = new Conta("123", "Gabriel");
            
            $conta1->abrirConta("Poupan�a");
            $conta1->depositar(200);
            $conta1->pagarMensalidade();
            // $conta1->sacar(151);
            // $conta1->fecharConta();
            
            echo "<br/>";

            echo "Dono da Conta " . $conta1->getDonoConta() . "<br/>";
            echo "N�mero da Conta " . $conta1->getNumeroConta() . "<br/>";
            echo "Saldo da Conta " . $conta1->getSaldoConta() . "<br/>";
            echo "Tipo da Conta " . $conta1->getTipoConta() . "<br/>";
            echo "Status da Conta " . $conta1->getStatusConta() . "<br/>";

        

        ?>
    
    </pre>
</body>
</html>