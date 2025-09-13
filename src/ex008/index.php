<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio de login</title>
</head>
<body>
    <h1>Exercício de Login</h1>
    <?php
        function verificaLogin($login, $senha){
            if($login == "admin" && $senha == "1234"){
                return "Login bem-sucedido";
            }else {
                return "Usuário ou senha inválidos";
            }
        }
        
        echo verificaLogin("admin", "1234");
        echo "<br>";
        echo verificaLogin("user", "senha");
    
        
    ?>
    
</body>
</html>