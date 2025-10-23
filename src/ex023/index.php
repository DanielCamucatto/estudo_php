<?php

$xml_inventario = <<<XML
<inventario>
    <produto codigo="REF-4521">
        <nome>Notebook Ultra Rápido</nome>
        <preco>5500.00</preco>
    </produto>
    <produto codigo="REF-9080">
        <nome>Monitor Gamer 4K</nome>
        <preco>1800.00</preco>
    </produto>
    <produto codigo="REF-1010">
        <nome>Mouse Ergonômico</nome>
        <preco>120.00</preco>
    </produto>
</inventario>
XML;

// 1. Carregar a string XML.
$inventario = simplexml_load_string($xml_inventario);
// print_r($inventario);

// 2. Iterar sobre todos os produtos, acessando o Nome (tag) e o Código (atributo).

// SEU CÓDIGO COMEÇA AQUI:
foreach($inventario->produto as $item){
    $name = (string) $item->nome;
    $code = (string) $item['codigo'];

    echo "O nome do produto é: " . $name . "e seu código é: " . $code;
    echo "<br>" ;
}


// FIM DO SEU CÓDIGO
?>