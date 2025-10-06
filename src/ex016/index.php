<?php
// Agora que você conhece a sintaxe simplificada, vamos implementar o exercício original.

// Converta a lógica de somar 1 ponto a cada nota, usando a sintaxe de Arrow Function (fn), dentro do array_map.

$notasJoao = [8.5, 7.0, 9.0];

// Reescreva a linha $notasComBonus usando a sintaxe fn () =>
// $notasComBonus = array_map( /* Sua Arrow Function aqui */, $notasJoao);
$notasComBonus = array_map(fn ($nota) => $nota + 1, $notasJoao);

echo "Notas originais: ";
print_r($notasJoao);

echo "Notas com bônus (Arrow Function): ";
print_r($notasComBonus);