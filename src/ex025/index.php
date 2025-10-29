<?php

// Token de autenticação simulado
$token_de_autenticacao = 'a1b2c3d4e5f6g7h8i9j0';

// Tempo de expiração em 24 horas (24 * 60 * 60 segundos)
$expiracao = time() + (24 * 60 * 60);

// Caminho (disponível em todo o site)
$path = '/';

// Domínio (não especificado)
$domain = null;

// 1. Defina o cookie 'auth_token' com o máximo de segurança.
// Seu código setcookie() deve vir aqui.
setcookie('auth_token', $token_de_autenticacao, [
    'expires'  => $expiracao,
    'path'     => $path,
    'domain'   => $domain ?? '',
    'secure'   => true,
    'httponly' => true,
    'samesite' => 'Strict'
]);

// Feedback para o usuário
echo "Cookie 'auth_token' definido com segurança máxima, válido por 24 horas.";

?>