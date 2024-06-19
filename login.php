<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT id, username, password FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
            // Autenticação bem-sucedida
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            // Redirecionar para a página home
            header("Location: index.php");
            exit();
        } else {
            $login_error = "Senha incorreta.";
        }
    } else {
        $login_error = "Nome de usuário não encontrado.";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MIKEFLIX</title>
    <!-- Incluindo a fonte Bebas Neue do Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estilos específicos para a página de login */
        * {
            box-sizing: border-box;
            margin: 0px; padding: 0px;
        }
        body {
            background-color: #141414; /* Cor de fundo escura */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #fff; /* Cor do texto */
            position: relative; /* Posicionamento relativo para permitir o posicionamento absoluto da logo */
            
        }
        /* estilos da logo */
        .site-logo {
            text-align: center; /* alinhar a logo no centro */
            position: absolute; /* posiciona de forma absoluta */
            top: 0px; /* distância do topo */
            left: 50%; /* centralizando horizontalmente */
            transform: translateX(-50%); /* ajusta para centralizar */
            width: 100%; /* largura total */
            padding: 20px 0; /* espaçamento interno */
        }

        .logo-text {
            font-family: 'Bebas Neue', sans-serif; /* aplica a fonte bebas neue */
            font-size: 48px;
            color: #e50914;
            text-decoration: none; /* remove sublinhado do link */
        }

        .logo-text a {
            color: #e50914;
            text-decoration: none;
        }

        .login-container {
            width: 100%;
            max-width: 400px; /* Largura máxima do container */
            text-align: center;
            margin-top: 0vh; /* espaço acima da box de login */
        }

        .login-box {
            background-color: #333;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }

        h2 {
            color: #fff; /* Cor do título */
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            color: #fff; /* Cor do texto dos inputs e botão */
            background-color: #222; /* Cor de fundo dos inputs */
        }

        button {
            background-color: #e50914; /* Cor de fundo do botão */
            cursor: pointer;
        }

        button:hover {
            background-color: #ff0a16; /* Cor de fundo do botão ao passar o mouse */
        }

        .error-message {
            color: #ff6347; /* Cor vermelha para mensagens de erro */
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="site-logo">
    <h1 class="logo-text"><a href="index.php">MIKEFLIX</a></h1>
</div>

<div class="login-container">
    <div class="login-box">
        <h2>Login</h2>
        <?php if(isset($login_error)): ?>
            <p class="error-message"><?php echo $login_error; ?></p>
        <?php endif; ?>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="username" placeholder="Usuário" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</div>

</body>
</html>
