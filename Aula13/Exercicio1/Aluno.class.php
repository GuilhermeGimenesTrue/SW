<?php 

    class aluno{
        private $Nome;
        private $Nota1;
        private $Nota2;

        public function __construct($nome,$nota1,$nota2){
            $this->Nome = $nome;
            $this->Nota1 = $nota1;
            $this->Nota2 = $nota2;
        }

        public function VerDetalhes(){
            echo"Nome: {$this->Nome} <br>";
            echo"1° Nota: {$this->Nota1} <br>";
            echo"2° Nota: {$this->Nota2} <br>";
        }

        public function verificarSituacao(){
            if ((($this->Nota1 + $this->Nota2)/2)>= 7){
                echo"Aprovado!!!";
            }
            else{
                echo"Reprovado!!!";
            }
        }
    }

?>