<?php

// Seu Desafio: Calculando Áreas
// Neste exercício, o objetivo é usar o polimorfismo para calcular a área de diferentes formas geométricas.

// Crie a Classe Pai: Forma
// Crie uma classe chamada Forma.
class Forma
{
    // Adicione um método chamado calcularArea() que retorna o valor 0. Esta será a nossa implementação padrão.
    public function calcularArea($valor)
    {
        return 0;
    }
}


// Crie as Classes Filhas: Circulo e Quadrado
// Crie uma classe chamada Circulo que herde de Forma. Ela deve ter uma propriedade $raio.
class Circulo extends Forma
{
    public $raio;
    public $pi = 3.14;

        
    // Dentro da classe Circulo, sobrescreva o método calcularArea() para calcular a área de um círculo (pi * raio * raio).
    public function calcularArea($valor)
    {
        $this->raio = $valor;
        $areaTotal = $this->pi * $valor * $valor;
        return $areaTotal;
    }
}

// Crie uma classe chamada Quadrado que herde de Forma. Ela deve ter uma propriedade $lado.
class Quadrado extends Forma
{   
    public $lado;
    public $area;

    // Dentro da classe Quadrado, sobrescreva o método calcularArea() para calcular a área de um quadrado (lado * lado).
    public function calcularArea($value)
    {
        $this->lado = $value;
        $this->area = $value * $value;
        return $this->area;
    }
}



// Implemente o Polimorfismo



// Teste o Código

// Crie uma instância de Circulo com um raio de 5.
$calcCirculo = new Circulo();

// Crie uma instância de Quadrado com um lado de 4.
$calcQuadrado = new Quadrado();

// Chame o método calcularArea() em cada objeto e exiba o resultado na tela.
echo " A área do circulo é {$calcCirculo->calcularArea(5)}";
echo "A área do quadrado é {$calcQuadrado->calcularArea(4)}";

// Como você faria essa estrutura de classes e o código para testar se o polimorfismo está funcionando?