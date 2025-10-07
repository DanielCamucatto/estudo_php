<?php
// Seu Desafio: Definindo o Caso Base

// Vamos começar a construir a função recursiva fatorial($n).

// Qual seria o Caso Base (a condição de parada) para a função fatorial, sabendo que o fatorial de 1 é sempre 1?

// Como você começaria a função com o comando if para definir essa condição de parada?

function fatorial(int $n): int
{
    // SEU CASO BASE VAI AQUI!
    if($n === 1 || $n === 0)
    {
        return 1;
    }
    
    // Passo Recursivo (para quando o caso base não for atingido)
    return $n * fatorial($n - 1); 
}