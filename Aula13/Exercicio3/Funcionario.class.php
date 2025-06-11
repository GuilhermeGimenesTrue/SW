<?php 

    class Funcionario{
        private $Nome;
        private $Salario;

        public function __construct($nome,$salario){
            $this->Nome = $nome;
            $this->Salario = $salario;
        }

        public function aumentarSalario($porcentagem){
            $this->Salario += ($this->Salario)*($porcentagem/100);  
        }

        public function exibirInformacoes(){
            echo"Nome: {$this->Nome} <br>";
            echo"Salario: {$this->Salario} <br>";
        }
    }

?>