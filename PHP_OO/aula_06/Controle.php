
<?php

    require_once "Controlador.php";
    
    class Controle implements Controlador {

        //Atributos
        private $volume;
        private $ligado;
        private $tocando;
        

        //Contrutor
        public function __construct() {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }
        
        //m�todos abstrados da interface        
         public function ligar() {
            $this->setLigado(true);

        }

        public function desligar() {
            $this->setLigado(false);

        }
        
         public function abrirMenu() {
            if($this->getLigado() == true){
                echo "<br/>Volume est� em " . $this->getVolume();
                echo "<br/>Volume est� em " . ($this->getTocando()?"SIM ":"N�O ");
                
                for ($i = 0; $i <= $this->getVolume(); $i+=6){
                    echo "||";
                }
                echo "<br/>";
                
            }

        }
        
        public function fecharMenu() {
            if($this->getLigado() == true){
                echo "<br/>Fechar menu";
            }

        }

        public function desligarMudo() {
            if($this->getLigado() == true && $this->getVolume() == 0){
                $this->setVolume(50);
                echo "<br/>Est� com volume " . $this->getVolume();
            }

        }


        public function ligarMudo() {
            if($this->getLigado() == true && $this->getVolume() >= 0){
                $this->setVolume(0);
                echo "<br/>Est� mudo. Volume " . $this->getVolume();
            }
            
        }

        public function maisVolume() {
            if($this->getLigado() == true){
                $vol = $this->getVolume() + 5;
                $this->setVolume($vol);
            }
        }

        public function menosVolume() {
            if($this->getLigado() == true){
                $vol = $this->getVolume() + 5;
                $this->setVolume($vol);
            }
            
        }

        public function pause() {
            if($this->getLigado() == true && $this->getTocando() == true){
                $this->setTocando(false);
                
                echo "<br/> Est� em pause " . $this->getTocando();
            }
        }

        public function play() {
              if($this->getLigado() == true && $this->getTocando() == false){
                $this->setTocando(true);
                
                echo "<br/> Est� em pause " . $this->getTocando();
            }
             
        }
        
        //m�todos aessores.
        function getVolume() {
            return $this->volume;
        }

        function getLigado() {
            return $this->ligado;
        }

        function getTocando() {
            return $this->tocando;
        }

        function setVolume($volume): void {
            $this->volume = $volume;
        }

        function setLigado($ligado): void {
            $this->ligado = $ligado;
        }

        function setTocando($tocando): void {
            $this->tocando = $tocando;
        }


    }