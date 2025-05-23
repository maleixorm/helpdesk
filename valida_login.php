<?php

session_start();

$usuarios_app = [
    ['email' => 'contato@marcosaleixo.com.br', 'senha' => '1234'],
    ['email' => 'user@teste.com.br', 'senha' => 'abcd']
];

foreach ($usuarios_app as $user) {
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    }    
}

if ($usuario_autenticado) {
    echo 'Usuário autenticado.';
    $_SESSION['autenticado'] = 'SIM';
} else {
    $_SESSION['autenticado'] = 'NÃO';
    header("Location: index.php?login=erro");
}