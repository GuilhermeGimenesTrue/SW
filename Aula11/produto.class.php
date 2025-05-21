<?php 

    class produto{
        private $Nome;
        private $Preco;
        private $Quantidade;

        public function __construct($Nome, $Preco = 0.0, $Quantidade = 0.0){
            $this->Nome = $Nome;
            $this->Preco = $Preco;
            $this->Quantidade = $Quantidade;
        }

        public function getNome(){
            return $this->Nome;
        }

        public function setNome($Nome){
            $this->Nome = $Nome;
        }

        public function getPreco(){
            return $this->Preco;
        }

        public function setPreco($Preco){
            $this->Nome = $Preco;
        }

        public function adicionarEstoque($qtd){
            if($qtd>=0){
                $this->Quantidade += $qtd;
            }
        }

        public function removerEstoque($qtd){
            if($this->Quantidade>=0){
                $this->Quantidade -= $qtd;
            }
        }

        public function mostrarDetalhes(){
            echo"Produto: ".$this->Nome."</br>";
            echo"Preço: {$this->Preco} </br>";
            echo"Quantidade em estoque: {$this->Quantidade} </br>";
        }
    }

?>