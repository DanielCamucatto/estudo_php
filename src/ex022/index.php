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
 $valor_total_estoque = 0.0;

// SEU CÓDIGO COMEÇA AQUI:

// A. Decodificar o JSON de entrada para um array PHP.
$json_entrada = json_decode($carrinho_json, true);                  
// Imprimir a estrutura decodificada de forma legível no navegador.
// json_decode retorna um objeto (stdClass) por padrão, e não pode ser
// convertido diretamente para string com echo. Use print_r/var_dump
// ou converta de volta para JSON com json_encode.
// echo '<pre>';
// print_r($json_entrada);
// echo '</pre>';

// Alternativas:
// var_dump($json_entrada);
// echo json_encode($json_entrada, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
// echo $carrinho_json; // imprime a string JSON original

// B. Loop para iterar e calcular o subtotal de cada item (preco * quantidade).
// Lembre-se que $carrinho_array é um array de arrays.

foreach($json_entrada as $item)
{
    $preco = $item['preco'];
    $quantidade = $item['quantidade']; 

    $sub_total= $preco * $quantidade;
    $valor_total_estoque += $sub_total; 

    $carrinho_array[] =[
        'id' => $item['id'],
        'produto' => $item['produto'],
        'preco' => $preco,
        'quantidade' => $quantidade,
        'subtotal' => $sub_total
    ];
    
}
// C. Codificar o array processado de volta para JSON na variável $json_saida.
$json_saida = json_encode([
    'Itens' => $carrinho_array,
    'Valor_total_estoque' => $valor_total_estoque,
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
// D. Imprimir o resultado final.
print_r($json_saida);
// FIM DO SEU CÓDIGO
?>