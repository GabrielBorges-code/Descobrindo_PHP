<?php
    class Livro {
        var $titulo;
        var $autor;
        var $lendo;
        
        function ler(){
            if ($this -> lendo == true){
                echo "<p>Estou lendo esse livro</p>";
            }else{
                echo "<p>Não estou lendo</p>";
            }
        }
    }

?>