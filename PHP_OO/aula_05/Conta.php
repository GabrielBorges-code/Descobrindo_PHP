<?php
    class Conta {
        
        public $numeroConta;
        protected $tipoConta;
        private $donoConta;
        private $saldoConta;
        private $statusConta;
        
        public function __construct($nc, $dc) {
            $this->numeroConta = $nc;
            $this->tipoConta = null;
            $this->donoConta = $dc;
            $this->saldoConta = 0; //0
            $this->statusConta = false; //false
        }
        

        public function abrirConta($tipoConta) {
            $this->statusConta = true;

            if($tipoConta == "Poupança"){
                $this->saldoConta = 150;
                $this->tipoConta = "Poupança";

                echo "<br/>Conta "  . $this->tipoConta . " aberta você recebeu R$ " . $this->saldoConta; 


            }elseif ($tipoConta == "Corrente"){
                $this->saldoConta = 50;
                $this->tipoConta = "Corrente";

                echo "<br/>Conta "  . $this->tipoConta . "aberta você recebeu R$ " . $this->saldoConta; 

            }else{
                $this->statusConta = false;

                echo "<br/>tipo escolhido inválido";
            }

        }

        public function fecharConta() {
            if($this->statusConta == true){
                if($this->saldoConta == 0){
                    $this->statusConta = false;
                    echo "<br/>Conta fechada. Status da conta " . $this->statusConta;
    
                }elseif($this->saldoConta <> 0){
                    echo "<br/>Essa conta não pode ser fechada saldo está diferente de 0";
    
                }

            }elseif($this->statusConta == false){
                echo "Está conta já  está fechada";

            }
        }

        public function depositar($valor) {
            if($this->statusConta == true){
                $this->saldoConta += $valor;
                echo "<br/>Valor de R$ " . $valor . " foi depositado";

            }
            
        }

        public function sacar($valor) {
            if($this->statusConta == true){
                if($this->saldoConta <= 0){
                    echo "<br/>Não é possível sacar valores da conta" . $this->tipoConta . " numero: " . $this->numeroConta . "pois a conta está sem saldo. </br> Saldo atual R$" . $this->saldoConta;
                }elseif($this->saldoConta < $valor){
                    echo "<br/>valor R$ " . $valor . " é maior que o saldo R$ " . $this->saldoConta;
    
                }elseif($this->saldoConta >= $valor){
                    $this->saldoConta -= $valor;
                    echo "<br/>saque realizado com sucesso <br/> " . "saldo atual R$ " . $this->saldoConta; 
                }

            }else{
                echo "<br/>não foi possível sacar desta conta, ela está fechada";
            }
            
        }

        public function pagarMensalidade() {
            if($this->statusConta == true){
                if($this->tipoConta == "Poupança"){
                    $this->saldoConta -= 20;

                }elseif($this->tipoConta == "Corrente"){
                    $this->saldoConta -= 12;
                    
                }
            }else{
                echo "<br/>A conta está fechada";
            }
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

        public function getDonoConta() {
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
