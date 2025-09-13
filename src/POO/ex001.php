<?php
    class pessoa{
        public $nome; 
        public $idade;

        public function apresentar(){
            return "Olá, meu nome é $this->nome e eu tenho $this->idade anos.";
        }
    }

    $p1 = new pessoa();
    $p1->nome = "Maria Joaquina";
    $p1->idade = 45; 

    echo $p1->apresentar();


?>