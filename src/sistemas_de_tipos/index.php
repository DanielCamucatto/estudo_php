<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas de Tipos</title>
</head>
<body>
    <h1>Sistemas de tipos</h1>
    <h2>Objetivo:</h2>
    <p>Praticar o uso de tipos escalares (int, string e bool) e a declaração de tipos em funções, que são a base do sistema de tipos do PHP</p>
    <?php
        // tarefa:

        // criar uma função somar:
            // - a função deve aceitar dois paramentros $a e $b
            // - use a declaração de tipos para garantir que ambos os parâmetros sejam do tipo int
            // - a função deve retornar a soma dos dois números, e o tipo de retorno também deve ser int

            function somar(int $a, int $b): int {
                return $a + $b;
            }

        // crie uma função formatar_mensagem:
            // - a função deve aceitar um parâmentro do tipo string chamado $nome e um tipo int chamdo $idade
            // - a função deve retornar uma string formatada como: "Olá, [nome], você tem [idade] anos."
            // - declare os tipos dos parãmetros e do tipo de retorno.

            function formatar_mensagem(string $nome, int $idade): string {
                return "Olá, $nome, você tem $idade anos";
            }

        
        // crie uma função eh_maior_de_idade:
            // - a função deve aceitar um parâmetro do tipo int chamado $idade
            // - a função deve retornar um valor booleano (true ou false) indicando se a idade é maior ou igual a 18
            // - declare o tipo do parâmetro e do tipo de retorno.

            function eh_maior_de_idade(int $idade): bool {
                if ($idade >= 18) {
                    return true;
                } else {
                    return false;
                }
            }

        

        // Demostração 
            // chame a função somar(5,10) e imprima o resultado'
            echo "<p>O resultado da soma é </p>" . somar(5, 10);
            // chame a função formatar_mensagem("João", 30) e imprima o resultado
            echo "<p>" . formatar_mensagem("João", 30) . "</p>"; 
            // chame a função eh_maior_de_idade(20) e imprima o resultado
        echo "<p> É maior de idade? " . (eh_maior_de_idade(20)? "Sim" : "Não") . "</p>";
    
    ?>
</body>
</html>