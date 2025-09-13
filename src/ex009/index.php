<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associativo</title>
</head>

<body>
    <h1>Exercício de Array Associativo</h1>
    <p>
        Crie um array associativo para um livro, com as chaves "titulo", "autor" e "ano". Em seguida, use um loop foreach para exibir na tela todas as chaves e seus respectivos valores.

        O resultado esperado seria algo como:

        Título: O Senhor dos Anéis

        Autor: J.R.R. Tolkien

        Ano: 1954

        Como você faria isso?
    </p>
    <?php
        $livro = [
            "titulo" => "O Senhor dos Anéis",
            "autor" => "J.R.R. Tolkien",
            "ano" => 1954,
        ];

        foreach($livro as $chave => $valor){
            echo $chave . ":" . $valor . "<br>"; 
        }
    
    ?>
</body>

</html>