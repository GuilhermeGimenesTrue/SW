<?php 

    class Conta{
        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){
            if ($valor>$this->Saldo){
                $resultado = "Saldo Insuficiente <br><hr>";
                return $resultado;
            }else{
                $this->Saldo = $this->Saldo - $valor;
                $resultado = "Saldo Atualizado para R$ " . $this->Saldo . "<br><hr>";
                return $resultado;
            }
        }

        public function Depositar($valor){
            $this->Saldo = $this->Saldo + $valor;
            $resultado = "Saldo Atualizado para R$ " . $this->Saldo . "<br><hr>";
            return $resultado;
        }
        public function ConsultarSaldo(){
            echo "NOME: " . $this->Nome . "<br>";
            echo "CPF: " . $this->Cpf . "<br>";
            echo "Saldo Atual R$ " . $this->Saldo . "<br>";
            echo "<hr>";
        }
    }

?>