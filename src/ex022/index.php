<?php

// 1. DADOS DE ENTRADA (Simulando o que viria de um POST ou API)
$carrinho_json = '[
    {"id": 101, "produto": "Camiseta PHP", "preco": 50.00, "quantidade": 2},
    {"id": 102, "produto": "Caneca Dev", "preco": 25.00, "quantidade": 4},
    {"id": 103, "produto": "Adesivo JS", "preco": 5.00, "quantidade": 10}
]';

// Variável para armazenar os dados decodificados (array PHP)
$carrinho_array = []; 
// Variável para armazenar o JSON de resposta
$json_saida = '';

// SEU CÓDIGO COMEÇA AQUI:

// A. Decodificar o JSON de entrada para um array PHP.
$json_entrada = json_decode($carrinho_json);

// B. Loop para iterar e calcular o subtotal de cada item (preco * quantidade).
// Lembre-se que $carrinho_array é um array de arrays.

// C. Codificar o array processado de volta para JSON na variável $json_saida.

// D. Imprimir o resultado final.

// FIM DO SEU CÓDIGO

?>