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

// 2. Itere sobre as linhas. Dica: Use fgetcsv() uma vez antes do loop 
// para ignorar a primeira linha (o cabeçalho).
if($inventarioCSV === false){
    return null;
}

while(($dados = fgetcsv($inventarioCSV, 1000, " , ")) !== false)
{
    $soma = 0;
    $soma = $inventarioCSV;

    return $soma;
}

// 3. No loop, calcule o valor do estoque.

// 4. Feche o arquivo.
fclose($inventarioCSV);
// 5. Imprima o resultado final.
echo $soma;