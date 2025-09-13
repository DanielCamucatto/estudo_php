<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartão de Perfil Dinâmico</title>
</head>
<body>
    <h1>Cartão de Perfil Dinâmico</h1>
    <h2>Objetivo:</h2>
    <p>Criar uma página HTML simples que usa PHP para exibir informações de um perfil de usuário de forma dinamica</p>
    <?php
        // Definindo variáveis com informações do usuário
        $nome = "João da Silva";
        $idade = 30;
        $cidade = "São Paulo";
        $estudando_php = true;
    ?>

    <h2>Perfil do Usuário</h2>
    <p><strong>Nome:</strong> <?php echo $nome; ?></p>
    <p><strong>Idade:</strong> <?php echo $idade; ?> anos</p>
    <p><strong>Cidade:</strong> <?php echo $cidade; ?></p>
    <p><strong>estudando php?</strong></br>
        <?php 
        
            if($estudando_php){
                echo "Estou animado para aprender PHP!";
            }
            else {
                echo "Preciso começar a estudar PHP!";
            }
        
        
        ?>
    </p>

</body>
</html>