<?php
    class Abajour{
        var $aceso;
        var $cor;
        var $tomada;

        function acender(){
            if($this -> tomada == true){
                $this -> aceso = "Luz acesa";            
            
            }else{
                $this -> aceso = "Luz apagada";            

            }
        }

    }

?>