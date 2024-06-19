<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Séries</title>
    <!-- Incluindo a fonte Bebas Neue do Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estilos específicos para a página de series */
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

        .card {
            background-color: #141414; /* Cor de fundo do card */
            border: none; /* Remove borda do card */
        }

        .card-img-top {
            height: 400px; /* Altura da imagem */
            object-fit: cover; /* Redimensiona a imagem para cobrir a área especificada */
            border-radius: 24px 24px 0 0; /* Borda arredondada apenas no topo */
        }

        .card-body {
            padding: 20px; /* Espaçamento interno do corpo do card */
        }

        .card-title {
            color: #fff; /* Cor do título */
        }

        .card-text {
            color: #ccc; /* Cor do texto do card */
        }
    </style>
</head>
<body>
    <div class="site-logo">
        <h1 class="logo-text"><a href="index.php" style="color: #e50914; text-decoration: none;">MIKEFLIX</a></h1>
    </div>

    <nav class="navbar navbar-expand-lg navbar-inverse bg-inverse">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item custom-red">
                    <a class="nav-link" href="filmes.php">Filmes</a>
                </li>
                <li class="nav-item custom-red active">
                    <a class="nav-link" href="series.php">Séries</a>
                </li>
                <li class="nav-item custom-red">
                    <a class="nav-link" href="contato.php">Contato</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastro.php">Cadastro</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Séries</h1>
        <div class="row">
            <?php
            // Array de séries
            $series = array(
                array(
                    'titulo' => 'Better Call Saul',
                    'descricao' => 'Série que conta a história do advogado Saul Goodman antes dos eventos de Breaking Bad.',
                    'imagem' => 'img/01.png'
                ),
                array(
                    'titulo' => 'Breaking Bad',
                    'descricao' => 'Um professor de química do ensino médio que é diagnosticado com câncer de pulmão inoperável se transforma em um produtor de metanfetamina para garantir o futuro de sua família.',
                    'imagem' => 'img/02.jpg'
                ),
                array(
                    'titulo' => 'Limitless',
                    'descricao' => 'Um homem ganha a capacidade de usar 100% da capacidade de seu cérebro e se torna um consultor para o FBI.',
                    'imagem' => 'img/06.jpg'
                ),
                array(
                    'titulo' => 'Sons of Anarchy',
                    'descricao' => 'A história de um clube de motociclistas ilegais que opera tanto atividades ilegais quanto legais em uma pequena cidade da Califórnia.',
                    'imagem' => 'img/07.jpg'
                ),
                array(
                    'titulo' => 'House of the Dragon',
                    'descricao' => 'Uma série derivada de Game of Thrones, que se passa 300 anos antes dos eventos da série original, centrando-se na Casa Targaryen.',
                    'imagem' => 'img/11.jpg'
                )
            );

            // Loop através das séries para exibi-las
            foreach ($series as $serie) {
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card">';
                echo '<img src="' . $serie['imagem'] . '" class="card-img-top" alt="' . $serie['titulo'] . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $serie['titulo'] . '</h5>';
                echo '<p class="card-text">' . $serie['descricao'] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
