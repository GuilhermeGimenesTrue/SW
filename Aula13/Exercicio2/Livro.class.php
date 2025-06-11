<?php 

    class Livro{
        private $Titulo;
        private $Autor;
        private $Disponivel;

        public function __construct($titulo,$autor,$disponivel="Disponível"){
            $this->Titulo = $titulo;
            $this->Autor = $autor;
            $this->Disponivel = $disponivel;
        }

        public function emprestarLivro(){
            $this->Disponivel = "Emprestado <br>";
        }

        public function devolverLivro(){
            $this->Disponivel = "Disponivel <br>";
        }

        public function exibirStatus(){
            echo"Titulo: {$this->Titulo} <br>";
            echo"O Status do livro é: {$this->Disponivel} <br>";
        }

    }

?>