<?php

// Conteúdo simulado do inventario.csv:
// Nome,Categoria,Preco,Quantidade
// Laptop,Eletronicos,3500.00,5
// Celular,Eletronicos,1200.00,10
// Teclado,Acessorios,150.00,20

$caminho_arquivo = 'inventario.csv';
$valor_total_estoque = 0.0;

// Simulação de conteúdo (opcional, mas ajuda a garantir que o arquivo exista)
file_put_contents($caminho_arquivo, "Nome,Categoria,Preco,Quantidade\nLaptop,Eletronicos,3500.00,5\nCelular,Eletronicos,1200.00,10\nTeclado,Acessorios,150.00,20\n");

// SEU CÓDIGO COMEÇA AQUI:
// 1. Abra o arquivo...
$inventarioCSV = fopen($caminho_arquivo, "r");

if($inventarioCSV === false){
   die("Erro não foi possível abrir o arquivo CSV" . $caminho_arquivo);
}
// 2. Itere sobre as linhas. Dica: Use fgetcsv() uma vez antes do loop 
// para ignorar a primeira linha (o cabeçalho).
fgetcsv($inventarioCSV);

while(($dados = fgetcsv($inventarioCSV, 1000, " , ")) !== false)
{
   // indice do array de dados
   // [0] = nome
   // [1] = categoria
   // [2] = preco
   // [3] = quantidade

   // 3. No loop, calcule o valor do estoque.
   $preco = (float) $dados[2];
   $quantidade = (int) $dados[3];

   $valor_total_estoque += ($preco * $quantidade);
}


// 4. Feche o arquivo.
fclose($inventarioCSV);
// 5. Imprima o resultado final.
echo "O valor total do estoque é R$: " . number_format($valor_total_estoque, 2, ",", ".");