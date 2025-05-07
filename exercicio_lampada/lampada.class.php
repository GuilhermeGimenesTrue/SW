<?php 
    class lampada{
        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $Status;

        public function Ligar(){
            $this->Status = True;
        }

        public function Desligar(){
            $this->Status = False;
        }

        public function MostrarDados(){
            echo"O Fabricante é: " . $this->Fabricante."<br>";
            echo"A Tensão é: " . $this->Tensao."<br>";
            echo"A Potencia é: " . $this->Potencia."<br>";
            echo"A Cor é: " . $this->Cor."<br>";
            if ($this->Status == True){
                echo "Status: LIGADA <br>";
            }else {
                echo "Statu: Desligada <br>";
            }
            echo "<hr>";

        }
    }
?>