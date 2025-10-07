<?php
// Desafio 1: Filtrando Elementos (array_filter)
// O array_filter() usa um callback para filtrar elementos. A função de callback deve retornar true para manter o elemento e false para descartá-lo.

// Usando uma Arrow Function, como você filtraria o array $notasTurma para manter apenas as notas que são iguais ou superiores a 9.0?

$notasTurma = [6.0, 9.5, 7.5, 10.0, 8.0];

// Dica: Use o array_filter. O callback deve retornar uma expressão booleana.
$notasAltas = array_filter( $notasTurma, fn ($nota) => ($nota >= 9)); 

// Desafio 2: Mapeando Strings (array_map)
// O array_map funciona com qualquer tipo de dado.

// Usando uma Arrow Function, como você converteria todos os nomes do array $alunosNomes para letras maiúsculas usando a função nativa do PHP strtoupper()?


$alunosNomes = ["joão", "maria", "pedro"];

// Dica: A função nativa é strtoupper($string)
$nomesMaiusculos = array_map( fn($nome) => strtoupper($nome), $alunosNomes);