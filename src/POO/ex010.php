<?php

// Seu Desafio: Polimorfismo na Prática
// Vamos praticar isso com as classes Veiculo, Carro e Moto que você já conhece.

// Crie uma classe pai Veiculo que tenha um método chamado ligarMotor(). Este método deve exibir uma mensagem genérica como "Motor do Veículo ligado".
class Veiculo
{
    public function ligarMotor()
    {
        echo "Motor do veículo ligado";
    }
}

// Crie uma classe filha Carro que herde de Veiculo e sobrescreva o método ligarMotor() para exibir "Vrum! O motor do carro ligou.".
class Carro extends Veiculo
{
    public function ligarMotor()
    {
        echo "Vrum! o motor do carro ligou";
    }
}

// Crie uma classe filha Moto que também herde de Veiculo e sobrescreva o método ligarMotor() para exibir "Tcha tcha tcha! O motor da moto ligou.".
class Moto extends Veiculo
{
    public function ligarMotor()
    {
        echo "Tcha tcha tcha! O motor da moto ligou.";
    }
}

$vectra = new Carro(4);
$vectra->ligarMotor();
echo"<br>";
$fazer = new Moto(125);
$fazer->ligarMotor();