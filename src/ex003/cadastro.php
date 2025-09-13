<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro do usuário</title>
</head>
<body>
    <?php
     $name = $_POST['name'] ?? "José";
     $LasName = $_POST['lastName'] ?? "da Silva";

     echo "Olá $name $LasName, seja bem-vindo ao nosso site!<br>";
        
    ?>
</body>
</html>