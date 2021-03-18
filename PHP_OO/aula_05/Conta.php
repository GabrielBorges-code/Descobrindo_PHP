<?php
    class Conta {
        public $numeroConta;
        protected $tipoConta;
        private $donoConta;
        private $saldoConta;
        private $statusConta;

        // public function __construct($nc, $tc, $dc) {
        //     $this->numeroConta = $nc;
        //     $this->tipoConta = $tc;
        //     $this->donoConta = $dc;
        //     $this->saldoConta = 0; //0
        //     $this->statusConta = false; //false
        // }
        public function __construct(){
            $this->valoresPadroes();

        }

        public function valoresPadroes(){
            $this->saldoConta = 0;
            $this->statusConta = false;

        }
        
        public function abrirConta($tipoConta) {
            $statusConta = true;
            if($tipoConta == "Poupança"){
                $saldoConta = 150;
            }else if ($tipoConta == "Corrente"){
                $saldoConta = 50;
            }else{
                echo "valor escolhido inválido";
            }
        }

        public function fecharConta($saldoConta) {
            if($saldoConta <> 0){
                echo "Não é possível fechar a conta! Regularize.";
            }else if($saldoConta == 0){
                $statusConta = false;
                echo "Conta fechada";
            }
        }

        public function depositar($valor) {
            
        }

        public function sacar($valor) {
            
        }

        public function pagarMensalidade() {
        }

        //métodos acessores
        public function getNumeroConta() {
            return $this->numeroConta;
        }
        public function setNumeroConta($n) {
            $this->numeroConta;
        }

        public function getTipoConta() {
            return $this->tipoConta;
        }
        public function setTipoConta($t) {
            $this->tipoConta;
        }

        public function geDonoConta() {
            return $this->donoConta;
        }
        public function setDonoConta($d) {
            $this->donoConta;
        }

        public function getSaldoConta() {
            return $this->saldoConta;
        }
        public function setSaldoConta($s) {
            $this->saldoConta;
        }

        public function getStatusConta() {
            return $this->statusConta;
        }
        public function setStatusConta($s) {
            $this->statusConta;
        }
    }
?>
