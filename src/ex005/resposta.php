<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando Número Aleatorio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <main>
    <p>
        <?php
            $num_rand = mt_rand(0, 10000);
            echo "Número aleatório gerado: $num_rand";
        ?>    
        
    </p>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>