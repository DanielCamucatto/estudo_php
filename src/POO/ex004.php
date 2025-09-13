<?php

// Seu Desafio: A Classe Estudante
// Crie uma classe chamada Estudante que vai simular o registro de um aluno em uma escola.

// Essa classe deve ter:

// Propriedades públicas: $nome, $matricula e $notas. A propriedade $notas deve ser um array vazio por padrão.

// Um método público chamado adicionarNota que recebe um único parâmetro: $nota.

// Dentro do método adicionarNota, adicione o valor de $nota ao array $notas que pertence ao objeto.

// Um método público chamado calcularMedia que percorra o array $notas e retorne a média aritmética de todas as notas.

// Depois de criar a classe, siga estes passos para testar:

// Crie um novo objeto Estudante.

// Defina o nome e a matrícula do estudante.

// Use o método adicionarNota() para adicionar algumas notas (por exemplo: 7, 8.5 e 6).

// Chame o método calcularMedia() e exiba o resultado na tela.

// Como você montaria essa classe e os passos para testá-la?


class estudante {
    public $nome = '';
    public $matricula = '';
    public $notas = [];

    public function adicionarNota($nota){
        $this->notas[] = $nota;
    }

    public function calcularMedia(){
        $media = 0;

        foreach($this->notas as $nota){
            $media = ($nota + $nota) / $nota;
        }

        return $media;
    }

}

$estudante1 = new estudante(); 
$estudante1->nome = "joao"; 
$estudante1->matricula = "123456"; 
$estudante1->adicionarNota(8);
$estudante1->adicionarNota(9);
$estudante1->adicionarNota(5); 
$media = $estudante1->calcularMedia();
echo "O Aluno $studante->nome com o número da matricúcla $estudante->matricula ficou com $media esse bimestre";