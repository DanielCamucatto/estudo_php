<?php
// Assume $conexao é um objeto de conexão MySQLi
$nome = $_POST['nome_produto'];
$preco = $_POST['preco'];

// QUERY VULNERÁVEL (como NÃO FAZER):
// $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome', $preco)";
// mysqli_query($conexao, $sql);

// SEU CÓDIGO (SEGURO) COMEÇA AQUI:

// 1. PREPARAR: Use um placeholder (?) para cada valor.
$stmt = $conexao->prepare("INSERT INTO produtos (nome, preco) VALUES (?, ?)");

// 2. BIND PARAM: Informe os tipos e as variáveis ('s' para string, 'd' para double/float).
// Lembre-se que o primeiro argumento é uma string de tipos ("sd" neste caso).
$stmt->bind_param("sd", $nome, $preco);

// 3. EXECUTAR: Roda a query.
$stmt->execute();

// 4. Fechar.
$stmt->close();

// FIM DO SEU CÓDIGO
echo "Novo produto inserido com segurança!";
?>