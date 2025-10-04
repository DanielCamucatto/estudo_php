<?php
// como você modificaria a função para usar o tipo float no parâmetro, caso a função fosse feita para calcular a média de apenas um aluno que tenha as notas declaradas fora de um array?



function calcAprovacao(float $nota1, float $nota2, float $nota3): float
{
    $notas_somadas = $nota1 + $nota2 + $nota3;
    $medias_final = $notas_somadas / 3; 
    return $medias_final;
}