<div class="card-filmes container">
    <h3 style="padding-top:20px; color:white;">As Melhores Séries</h3>
    <div class="row row-cols-1 row-cols-md-5 g-4">
        <?php
        $series = array(
            array(
                'titulo' => 'Better Call Saul',
                'descricao' => 'Série que conta a história do advogado Saul Goodman antes dos eventos de Breaking Bad.',
                'imagem' => './img/01.png'
            ),
            array(
                'titulo' => 'Breaking Bad',
                'descricao' => 'Um professor de química do ensino médio que é diagnosticado com câncer de pulmão inoperável se transforma em um produtor de metanfetamina para garantir o futuro de sua família.',
                'imagem' => './img/02.jpg'
            ),
            array(
                'titulo' => 'Limitless',
                'descricao' => 'Um homem ganha a capacidade de usar 100% da capacidade de seu cérebro e se torna um consultor para o FBI.',
                'imagem' => './img/06.jpg'
            ),
            array(
                'titulo' => 'Sons of Anarchy',
                'descricao' => 'A história de um clube de motociclistas ilegais que opera tanto atividades ilegais quanto legais em uma pequena cidade da Califórnia.',
                'imagem' => './img/07.jpg'
            ),
            array(
                'titulo' => 'The House of the Dragon',
                'descricao' => 'Uma série derivada de Game of Thrones, que se passa 300 anos antes dos eventos da série original, centrando-se na Casa Targaryen.',
                'imagem' => './img/11.jpg'
            )
        );

        // Função para gerar o HTML do card de série
        function exibirCardSerie($titulo, $descricao, $imagem) {
            echo '<div class="col">';
            echo '<div class="card h-100" style="background-color:#141414; border-radius:24px; overflow:hidden;">';
            echo '<img src="' . $imagem . '" class="card-img-top" alt="..." style="height: 300px; width: 200px; object-fit: cover;">';
            echo '<div class="card-body h-100">';
            echo '<h5 class="card-title" style="color:white;">' . $titulo . '</h5>';
            echo '<p class="card-text" style="color:white;">' . $descricao . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

        // Loop para exibir cada série
        foreach ($series as $serie) {
            exibirCardSerie($serie['titulo'], $serie['descricao'], $serie['imagem']);
        }
        ?>
    </div>
</div>
