<?php 

    class carro{
        public $Marca;
        public $Modelo;
        public $Combustível;
        public $Portas;
        public $Capacidade_tanque;

        public function MostrarDados(){
            echo "A Marca do Carro é: " . $this->$Marca."<br>";
            echo "O Modelo do Carro é: " . $this->$Modelo."<br>";
            echo "O tipo de Combustivel do Carro é: " . $this->$Combustível."<br>";
            echo "A quantidade de portas do Carro é: " . $this->$Portas."<br>";
            echo "A Capacidade no tanque do Carro é: " . $this->$Capacidae_tanque."<br>";
        }

    };

?>