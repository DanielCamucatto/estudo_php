<?php

// String JSON recebida de uma API
$json_string = '{"id": 42, "nome": "Alan Turing", "linguagens": ["PHP", "Python", "Lisp"]}';

// 1. Decodifique $json_string na variável $dados. 
// Garanta que $dados seja um array associativo.
$dados = json_decode($json_string, true);

// 2. Acessa e imprime o nome
echo "Nome do Usuário: " . $dados['nome'];
