<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Resposta do Formulário</h1>
    </header>
    <?php
        $num = $_POST['num'] ?? 0;
        $sucessor = $num + 1;
        $antecessor = $num - 1;

        echo "<p>O número escolhido foi: <strong>$num</strong></p>";
        echo "<p>O sucessor de $num é: <strong>$sucessor</strong></p>";
        echo "<p>O antecessor de $num é: <strong>$antecessor</strong></p>";
        echo "<p>Obrigado por participar!</p>";
         
    ?>
</body>
</html>