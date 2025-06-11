<?php 

    class Retangulo{
        private $Largura;
        private $Altura;

        public function __construct($largura,$altura){
            $this->Largura = $largura;
            $this->Altura = $altura;
        }

        public function MostrarDetalhes(){
            echo"Largura: {$this->Largura} <br>";
            echo"Altura: {$this->Altura} <br>";
        }

        public function calcularArea(){
            $Area = $this->Largura * $this->Altura;
            echo"A Area do retangulo é: {$Area} <br>";
        }

        public function calcularPerimetro(){
            $Perimetro = $this->Largura + $this->Altura;
            echo"O Perimetro do retangulo é: {$Perimetro} <br>";
        }
    }

?>