<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 010 - calcaulando salario</title>
</head>
<body>
    <h1>Calculo de imposto</h1>

    <?php
        require_once("funcoes.php");

        $meuSalario = 4000; 
        $salarioComImposto = calcularImposto($meuSalario);
      
        echo "seu salrio é " . $salarioComImposto
    
    ?>
    
</body>
</html>