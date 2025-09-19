<?php

// Seu Desafio: Veículo e Carro
// Crie uma hierarquia de classes para representar diferentes tipos de veículos.

// Classe Pai: Veiculo
// Crie uma classe chamada Veiculo.
class Veiculo
{
    // Ela deve ter uma propriedade pública $velocidade_atual que começa em 0.
    public $velocidade_atual = 0; 

    // Ela deve ter um método público acelerar() que recebe um valor ($incremento) e adiciona esse valor à $velocidade_atual.
    public function acelerar($incremento)
    {
        $velocidade_total = $this->velocidade_atual += $incremento;

        // O método acelerar() deve exibir a nova velocidade na tela.
        echo "A velocidade atual é $velocidade_total";
    }
}


// Classe Filha: Carro
// Crie uma classe chamada Carro que herde de Veiculo.
class Carro extends Veiculo
{
    // O Carro deve ter uma propriedade específica, como $portas.
    public $portas; 
    
    // Crie um construtor na classe Carro que receba o número de portas e defina a propriedade.

    public function __construct($num_portas)
    {
        $this->portas = $num_portas;
    }
}

// Classe Filha: Moto
// Crie uma classe chamada Moto que também herde de Veiculo.
class Moto extends Veiculo
{
    // A Moto deve ter uma propriedade específica, como $cilindradas.
    public $cilindradas;

    // Crie um construtor na classe Moto que receba as cilindradas e defina a propriedade.
    public function __construct($cilindradas)
    {
        $this->cilindradas = $cilindradas;
    }
}



// Depois de criar as classes, faça o seguinte:
// Crie uma nova instância de Carro.
$uno = new Carro(4);

// Chame o método acelerar() para ver a velocidade mudar.
$uno->acelerar(10);

// Crie uma nova instância de Moto.
$fazer = new Moto(125);

// Chame o método acelerar() para ver a velocidade mudar.
$fazer->acelerar(20);
