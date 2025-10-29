<?php

// 1. Simulação: Suponha que este cookie foi enviado pelo navegador
// (Na prática, o PHP popula $_COOKIE automaticamente)
$_COOKIE['user_id'] = 'user_67890';
$_COOKIE['tema'] = 'dark';

// 2. Acesse a super global $_COOKIE para obter o ID do usuário.
// O código deve imprimir: O ID do usuário logado é: user_67890

// SEU CÓDIGO COMEÇA AQUI:
$userLogado = $_COOKIE["user_id"];
echo "O ID do usúario logado é: " . $userLogado;

// FIM DO SEU CÓDIGO
?>