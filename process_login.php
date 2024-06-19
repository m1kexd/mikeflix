<?php
session_start(); // Inicia a sessão

// Verifica se o formulário de login foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simula uma verificação de usuário/senha (substitua por sua lógica real de autenticação)
    $valid_username = "admin"; // Usuário válido
    $valid_password = "password"; // Senha válida

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica se o usuário e a senha são válidos
    if ($username == $valid_username && $password == $valid_password) {
        // Autenticação bem-sucedida: redireciona para a página principal
        $_SESSION['username'] = $username; // Armazena o nome do usuário na sessão (opcional)

        header("Location: index.php"); // Redireciona para a página principal
        exit();
    } else {
        // Autenticação falhou: redireciona de volta para a página de login com mensagem de erro
        header("Location: login.php?error=login_failed"); // Pode adicionar um parâmetro de erro para exibir uma mensagem
        exit();
    }
} else {
    // Redireciona de volta para a página de login se o formulário não foi submetido
    header("Location: login.php");
    exit();
}
?>
