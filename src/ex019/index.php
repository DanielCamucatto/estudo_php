<!-- 🏋️ Desafio Prático: Calculando Média Variádica
Vamos aplicar o conceito Variádico no seu contexto de notas.

Sua função original de média só aceitava 3 notas. Crie uma nova função calcularMediaVariadica que aceite um número ilimitado de notas e calcule a média delas.

Dica: Você vai precisar do array_sum() (para somar) e do count() (para saber quantos elementos há no array $notas). -->

<?php

/**
 * Calcula a média de um número ILIMITADO de notas.
 */
function calcularMediaVariadica(...$notas): float
{
    // SEU CÓDIGO VAI AQUI
    
    // 1. Verifique se o array está vazio para evitar divisão por zero.
    if(count($notas) === 0)
    {
        return 0.0;
    }
    // 2. Calcule a soma de $notas.
    $somaTotal = array_sum($notas);

    // 3. obtem a quantidade dos elementos
    $quantidade = count($notas);
    // 3. Calcule a média (soma / quantidade).
    $media = $somaTotal / $quantidade;
}

// Exemplo de chamada:
$media = calcularMediaVariadica(8.5, 7.0, 9.0, 10.0, 6.5);