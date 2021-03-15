<?php

    class Caneta{
        public $modelo;
        private $ponta;
        private $tampada;
        private $cor;

        //construtor define um valor padrão aos atributos
        // public function __construct() {
        //     $this->cor = "Azul";
        //     $this->tampar();
        // }

        //tratando os atributos de forma direta
        public function __construct($m, $c, $p) {
           $this->modelo = $m;
           $this->cor = $c;
           $this->ponta = $p;
           $this->setTampada(false);
        }
        
        public function tampar(){
            $this->tampada = true;
        }

        //métodos acessores
        public function getTampada(){
            return $this->tampada;
        }
        public function setTampada($t){
            $this->tampada = $t;
        }
        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($m){
            $this->modelo = $m;
        }

        public function getPonta(){
            return $this->ponta;
        }
        public function setPonta($p){
            $this->ponta = $p;
        }

    }


?>