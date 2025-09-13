<?php
//     Seu Desafio para Fixar o foreach
// Agora, vamos fazer um exercício simples, mas que vai te ajudar a entender a lógica passo a passo.

// Imagine que você tem um array associativo de produtos, onde a chave é o nome do produto e o valor é o preço.
// $produtos = [
//     "notebook" => 2500,
//     "mouse" => 150,
//     "teclado" => 300
// ];
// Usando o foreach (na sua segunda forma, com chave e valor), como você faria para exibir na tela uma lista assim:

// notebook custa 2500 reais.
// mouse custa 150 reais.
// teclado custa 300 reais.
// Como você montaria o código para conseguir esse resultado?


$produtos = [
    "notebook" => 2500,
    "mouse" => 150,
    "teclado" => 300
];

foreach($produtos as $produto => $valor){
    echo $produto . " custa " . $valor . " reais <br/> ";
}