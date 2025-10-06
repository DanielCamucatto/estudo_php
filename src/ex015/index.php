<?php

// Como você faria a sua versão para o array_map que soma 1 ponto a cada nota?

$notasJoao = [8.5, 7.0, 9.0];

$notas_soma = array_map(function ($nota){
    return $nota + 1;
}, $notasJoao);