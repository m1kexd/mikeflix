<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo usuário registrado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - MIKEFLIX</title>
    <!-- Incluindo a fonte Bebas Neue do Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos específicos para a página de cadastro */
        body {
            background-color: #141414; /* Cor de fundo escura */
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #fff; /* Cor do texto */
        }

        .registro-container {
            width: 100%;
            max-width: 400px; /* Largura máxima do container */
            text-align: center;
            margin-top: 20vh; /* Espaço acima da box de registro */
        }

        .registro-box {
            background-color: #333;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }

        .site-logo {
            text-align: center; /* Alinha o logo ao centro */
            margin-bottom: 20px; /* Espaço abaixo do logo */
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

        input[type="text"],
        input[type="password"],
        button {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            background-color: #222; /* Cor de fundo dos inputs */
            color: #fff; /* Cor do texto dos inputs */
            outline: none; /* Remove a borda ao focar */
        }

        button {
            background-color: #e50914; /* Cor de fundo do botão */
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
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

<div class="registro-container">
    <div class="registro-box">
        <h2 style="color: #fff;">Cadastro</h2>
        <form method="post" action="registro.php">
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Usuário" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Senha" required>
            </div>
            <button type="submit" style="background-color: #e50914;">Cadastrar</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
