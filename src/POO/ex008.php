<?php
// Crie uma classe pai chamada Pessoa com as propriedades públicas $nome e $idade.

// Crie uma classe filha chamada Estudante que herde da classe Pessoa.

// A classe Estudante não precisa ter uma propriedade $nome ou $idade própria, pois ela vai herdá-las de Pessoa.

// Adicione uma propriedade específica de estudante, como $matricula, à classe Estudante.

// Como você montaria essas duas classes e como criaria um novo objeto Estudante e acessaria seu nome e matrícula?

class Pessoa {

    public $nome;
    public $idade;
    
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
}

class Estudante extends Pessoa {

    public $matricula; 

    public function __construct($nome, $idade, $matricula)
    {
        parent::__construct($nome, $idade);

        $this->matricula = $matricula;
    }
}

$novoEstudante = new Estudante("Bob", 45, "123456789");
echo "O nome do estudante é: $novoEstudante->nome , sua idade é $novoEstudante->idade, e esta matriculado sob o número $novoEstudante->matricula";
