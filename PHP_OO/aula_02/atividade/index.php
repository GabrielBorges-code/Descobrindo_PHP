<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 01 - POO</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Livro.php';
            require_once 'Abajour.php';
            
            $book1 = new Livro;
            $book1 -> titulo = "1984";
            $book1 -> autor = "George Orwell";
            $book1 -> lendo = true;
            $book1 -> ler();
            
            print_r($book1);
            

            $abajour1 = new Abajour;
            $abajour1 -> tomada = false;
            $abajour1 -> cor = "amarela";
            $abajour1 -> acender();

            print_r($abajour1);


        ?>
    </pre>
    
</body>
</html>