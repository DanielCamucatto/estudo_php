<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de Código PHP Timezone</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo");
        echo "hoje é dia " . date("d/m/Y") ;
        echo " e a hora atual é " . date("H:i:s");
    ?>
</body>
</html>