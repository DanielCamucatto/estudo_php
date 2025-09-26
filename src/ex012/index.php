<?php

// Seu Desafio: Calculando a Média de Notas
// A sua tarefa é, usando um foreach loop, calcular a média das notas de cada aluno.

// Aqui está o array que você vai usar. Ele contém os nomes dos alunos e um array de notas para cada um.

// Como você usaria um foreach para percorrer este array e exibir o nome de cada aluno e a sua média de notas? Para começar, como você escreveria a linha do foreach?

$alunos = [
    "João" => [8.5, 7.0, 9.0],
    "Maria" => [6.0, 8.0, 7.5],
    "Pedro" => [9.5, 9.0, 10.0]
];


foreach($alunos as $aluno=>$dadosAluno){
    $soma = array_sum($dadosAluno);
    // echo $soma;
    echo "<br>";
    $qtd = count($dadosAluno);
    // echo $qtd;
    $media = $soma / $qtd;
    // echo $media;
    $media_formatada = number_format($media, 1);

    echo "A média do {$aluno} é de {$media_formatada} \n";
}
