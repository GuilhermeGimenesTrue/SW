<?php 

    class carro{
        public $Marca;
        public $Modelo;
        public $Combustível;
        public $Portas;
        public $Capacidade_tanque;

        public function MostrarDados(){
            echo "A Marca do Carro é: " . $this->$Marca;
            echo "O Modelo do Carro é: " . $this->$Modelo;
            echo "O tipo de Combustivel do Carro é: " . $this->$Combustível;
            echo "A quantidade de portas do Carro é: " . $this->$Portas;
            echo "A Capacidade no tanque do Carro é: " . $this->$Capacidae_tanque;
        }

    }

?>