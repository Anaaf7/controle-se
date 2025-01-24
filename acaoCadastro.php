<?php
session_start();

//Verificar se o usuario está colocando as senhas de um adm
if ($_SESSION['adm']) {
    echo "<script>alert('Você é um admnistrador, não necessita de cadastro ;)')</script>";
}

// Inicializa a lista de usuários se ainda não existir
else if (!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = [];
}

// Adiciona o novo usuário ao array de usuários
$_SESSION['usuarios'][] = [
    'usuario' => $_POST['usuario'],
    'senha' => password_hash($_POST['senha1'], PASSWORD_DEFAULT), // Criptografa a senha
];


// Redireciona para o login
header("Location: login.php");
exit;
