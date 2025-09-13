<?php 
// Seu Desafio com o Construtor
// Vamos aplicar isso ao seu código anterior. Você já tem a classe Estudante que funciona perfeitamente.

// Seu desafio agora é modificar a sua classe Estudante para incluir um construtor que receba os valores de $nome e $matricula como parâmetros e os atribua às propriedades do objeto.

// Como ficaria a sua classe Estudante com essa modificação? E como você criaria um novo estudante, por exemplo, "Maria" com a matrícula "654321", usando o construtor?

class estudante {
    public $nome;
    public $matricula;
    public $notas = [];

    public function __construct($nome, $matricula)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function adicionarNota($nota){
        $this->notas[] = $nota;
    }

    public function calcularMedia() {
        if (count($this->notas) === 0) {
            return 0; // Evita erro de divisão por zero
        }

        $soma = 0;
        foreach ($this->notas as $nota) {
            $soma += $nota;
        }

        $media = $soma / count($this->notas);
        return $media;
    }

}

$estudante1 = new estudante("Maria", "654321"); 
$estudante1->adicionarNota(8);
$estudante1->adicionarNota(9);
$estudante1->adicionarNota(5); 
$media = $estudante1->calcularMedia();
echo "O Aluno $estudante1->nome com o número da matricúcla $estudante1->matricula ficou com $media esse bimestre";