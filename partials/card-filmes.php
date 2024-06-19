<div class="card-filmes container">
    <h3 style="padding-top:20px; color:white;">Os Melhores Filmes</h3>
    <div class="row row-cols-1 row-cols-md-5 g-4">
        <?php
        $filmes = array(
            array(
                'titulo' => 'O Lobo de Wall Street',
                'descricao' => 'Um corretor de bolsa de valores de Nova Iorque se recusa a cooperar em um grande caso de fraude de títulos mobiliários corporativos, envolvendo corrupção em Wall Street, o mercado bancário corporativo e a máfia.',
                'imagem' => './img/lobo_de_wall_street.png'
            ),
            array(
                'titulo' => 'O Poderoso Chefão',
                'descricao' => 'A história do mafioso ítalo-americano Don Vito Corleone, chefe de uma das cinco famílias de Nova York, que se torna o chefe de todas as famílias de crime organizado na região.',
                'imagem' => './img/o_poderoso_chefao.png'
            ),
            array(
                'titulo' => 'Clube da Luta',
                'descricao' => 'Um trabalhador de escritório desiludido forma um clube de luta clandestino com um vendedor de sabonetes excêntrico e logo se vê participando em algo muito maior.',
                'imagem' => './img/clube_da_luta.png'
            ),
            array(
                'titulo' => 'Deadpool 2',
                'descricao' => 'O mercenário mutante Wade Wilson, mais conhecido como Deadpool, reúne uma equipe de companheiros mutantes para proteger um jovem de habilidades sobrenaturais do brutal viajante no tempo Cable.',
                'imagem' => './img/deadpool2.jpg'
            ),
            array(
                'titulo' => 'Se beber não case',
                'descricao' => 'Três amigos viajam para Las Vegas para um grande despedida de solteiro, mas perdem o noivo apenas 8 horas antes da cerimônia.',
                'imagem' => './img/se_beber_nao_case.png'
            )
        );

        // Função para gerar o HTML do card de filme
        function exibirCardFilme($titulo, $descricao, $imagem) {
            echo '<div class="col">';
            echo '<div class="card h-100" style="background-color:#141414; border-radius:24px; overflow: hidden;">';
            echo '<img src="' . $imagem . '" class="card-img-top" alt="..." style="height: 300px; width: 200px; object-fit: cover;">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title" style="color:white;">' . $titulo . '</h5>';
            echo '<p class="card-text" style="color:white;">' . $descricao . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

        // Loop para exibir cada filme
        foreach ($filmes as $filme) {
            exibirCardFilme($filme['titulo'], $filme['descricao'], $filme['imagem']);
        }
        ?>
    </div>
</div>
