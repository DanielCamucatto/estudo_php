<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <?php
        if (isset($_POST['nome_usuario']) && isset($_POST['idade_usuario'])) {
            $nome = $_POST['nome_usuario'];
            $idade = $_POST['idade_usuario'];
            echo "Olá, $nome! Você tem $idade anos.";
        } else {
            echo "Erro: Formulário incompleto.";
        }
        ?>
</body>

</html>