<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" name="nome" placeholder="Seu nome">
        <input type="email" name="email" placeholder="Seu e-mail">
        <button type="submit">Enviar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // sanitiza/normaliza entrada
        $nome = trim(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        // valida email (VALIDATE, não SANITIZE)
        if ($email === null || $email === false || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "E-mail inválido";
            exit;
        }

        // saída segura (htmlspecialchars aqui é redundante depois do FILTER_SANITIZE_SPECIAL_CHARS,
        // mas é uma camada extra segura se você preferir)
        echo "O nome do usuário é: " . htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') . "<br>";
        echo "O email do usuário é: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    }

    ?>
</body>

</html>