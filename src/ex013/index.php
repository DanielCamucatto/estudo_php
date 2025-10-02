<?php

// Desafio: Criando uma Função de Média

// Você acabou de escrever um ótimo código para calcular a média dos alunos. Agora, vamos isolar essa lógica em uma função.

// Seu desafio é criar uma função chamada calcularMedia() que receba um array de notas como parâmetro e retorne a média dessas notas (usando o number_format para limitar a 3 casas decimais).

// Como você escreveria o código para essa função, seguindo as regras que aprendemos (array_sum e count)?

function CalcMedia($alunos)
{
    $soma_notas = []; // Array vazio
    
    foreach($alunos as $aluno => $notas)
    {
        $soma = array_sum($notas);
        $qtd = count($notas); 
        $media = $soma / $qtd; 
        $media_format = number_format($media, 1);

        // Ação de guardar o resultado no novo array, usando o nome como chave
        $soma_notas[$aluno] = $media_format;
    }

    // Retorna o array COMPLETO com todas as médias
    return $soma_notas;
}

$turma1 = CalcMedia($alunos);

// Para ver o resultado:
// print_r($turma1);