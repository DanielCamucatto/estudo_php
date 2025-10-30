<?php
session_start(); // Assumimos que a sessão foi iniciada

// 1. Remover todos os dados da super global $_SESSION.
session_unset();

// 2. Destruir a sessão no servidor.
session_destroy();

// 3. Destruir o cookie de sessão no navegador (usando setcookie no passado).
$session_cookie_name = session_name(); 
setcookie($session_cookie_name, '', time() - 3600, '/')

// SEU CÓDIGO FINAL DE LOGOUT AQUI:

?>