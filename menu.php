<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MIKEFLIX</title>
  <!-- Incluindo a fonte Bebas Neue do Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
        /* Estilos específicos para a página de filmes */
        body {
            background-color: #141414; /* Cor de fundo escura */
            font-family: Arial, sans-serif;
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
            margin: 20px 0; /* espaçamento em cima e embaixo do logo */
        }

        .logo-text a {
            color: #e50914; /* Cor vermelha para o link */
            text-decoration: none; /* Remove sublinhado do link */
        }

        .navbar {
            background-color: #0b0b0b; /* Cor de fundo da navbar */
        }

        .navbar .nav-item .nav-link {
            color: #e50914; /* Cor vermelha para os links da navbar */
            font-weight: bold; /* Deixa o texto em negrito */
            text-transform: uppercase; /* Transforma o texto em maiúsculo */
            font-size: 24px; /* Tamanho da fonte */
            margin: 0 10px; /* Margem entre os itens da navbar */
            transition: color 0.3s; /* Transição suave na mudança de cor */
            font-family: 'Bebas Neue', sans-serif; /* aplica a mesma fonte da logo */
        }

        .navbar .nav-item .nav-link:hover {
            color: #fff; /* Cor branca ao passar o mouse sobre os links da navbar */
        }

        .card-body {
            padding: 20px; /* Espaçamento interno do corpo do card */
        }
        </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-inverse bg-inverse">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item custom-red">
          <a class="nav-link" href="filmes.php">Filmes</a>
        </li>
        <li class="nav-item custom-red">
          <a class="nav-link" href="series.php">Séries</a>
        </li>
        <li class="nav-item custom-red">
          <a class="nav-link" href="contato.php">Contato</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <?php session_start(); ?>
        <?php if(isset($_SESSION['username'])): ?>
          <li class="nav-item custom-red">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        <?php else: ?>
          <li class="nav-item custom-red">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item custom-red">
            <a class="nav-link" href="registro.php">Cadastro</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
