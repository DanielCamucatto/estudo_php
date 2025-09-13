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
            $dollar = 5.20; // Valor do dólar
            $real = $_GET['valor'] ?? 0; 

            $conversor = $real / $dollar; 
            echo "O valor de R$ $real em dólares é: US$ " . number_format($conversor, 2, ',', '.');

        ?>    
        
    </p>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>