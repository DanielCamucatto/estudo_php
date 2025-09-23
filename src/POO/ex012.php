<?php

// Seu Desafio Final
// Vamos combinar tudo o que você aprendeu em um único exercício.

// Crie uma classe abstrata Veiculo com um método abstrato ligarMotor().
abstract class Veiculo {

    abstract public function ligarMotor();
}

// Crie uma interface Recarregavel com um método recarregar().
interface Recarregavel {
    public function Recarregar();
}

// Crie uma classe CarroEletrico que herde de Veiculo e implemente Recarregavel.
class CarroEletrico extends Veiculo implements Recarregavel {
    public function Recarregavel(){
        echo "Carro carregando";
    }

    // A classe CarroEletrico deve:
    // Implementar o método ligarMotor() (porque ele é abstrato na classe pai).
    public function ligarMotor()
    {
        echo "Motor ligado";
    }

    // Implementar o método recarregar() (porque ele está na interface).
    public function Recarregar(){
        echo "Carro eletrico carregando";
    }
}


// Crie uma instância de CarroEletrico e chame os dois métodos para ver o resultado.
$byd = new CarroEletrico();
$byd->ligarMotor();
$byd->Recarregar();

// Como você faria essa estrutura e o código para testar?