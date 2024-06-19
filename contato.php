<?php
session_start();

// Inclui o arquivo de configuração
include 'config.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $mensagem = $_POST['message'];

    // Prepara a SQL para inserir os dados
    $sql = "INSERT INTO contatos (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

    // Executa a SQL e verifica se foi inserido com sucesso
    if ($conn->query($sql) === TRUE) {
        // Mensagem de confirmação
        $_SESSION['contato_sucesso'] = true;
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

// Fecha a conexão
$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - MIKEFLIX</title>
    <!-- Incluindo a fonte Bebas Neue do Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estilos específicos para a página de contato */
        body {
            background-color: #141414; /* Cor de fundo escura */
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #fff; /* Cor do texto */
        }

        .site-logo {
            text-align: center; /* Alinha o logo ao centro */
            margin: 20px 0; /* Espaçamento em cima e embaixo do logo */
        }

        .logo-text {
            font-family: 'Bebas Neue', sans-serif; /* Aplica a fonte Bebas Neue */
            font-size: 48px;
            color: #e50914; /* Cor vermelha */
            text-decoration: none; /* Remove sublinhado do link */
        }

        .logo-text a {
            color: #e50914; /* Cor vermelha para o link */
            text-decoration: none; /* Remove sublinhado do link */
        }

        .contact-container {
            width: 100%;
            max-width: 600px; /* Largura máxima da box de contato */
            text-align: center;
            margin: 50px auto; /* Espaço acima da box de contato e centraliza horizontalmente */
            background-color: #333;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* sombra da box */
        }

        input[type="text"],
        input[type="email"],
        textarea,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            background-color: #222;
            color: #fff;
        }

        button {
            background-color: #e50914; /* Cor de fundo do botão */
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #ff0a16; /* Cor de fundo do botão ao passar o mouse */
        }
    </style>
</head>
<body>

<div class="site-logo">
    <h1 class="logo-text"><a href="index.php">MIKEFLIX</a></h1>
</div>

<div class="container mt-5">
    <div class="contact-container">
        <?php if (isset($_SESSION['contato_sucesso']) && $_SESSION['contato_sucesso']): ?>
            <div class="alert alert-success" role="alert">
                Mensagem enviada com sucesso!
            </div>
            <?php unset($_SESSION['contato_sucesso']); ?>
        <?php endif; ?>

        <h2>Entre em Contato</h2>
        <p>Bem-vindo à página de contato. Preencha o formulário abaixo para entrar em contato conosco.</p>
        <form method="POST" action="contato.php">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Seu nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Seu email" required>
            </div>
            <div class="form-group">
                <label for="message">Mensagem</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Sua mensagem" required></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
