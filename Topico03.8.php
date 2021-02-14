<?php
// HEADER
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->

        <div class="main-content container-fluid">
            <div class="page-title">

                <h3 class="font-bold">3.8. Estética e design minimalista</h3>
                <hr>

                <p class="Texto">
                    As <strong>interfaces não devem conter informações irrelevantes ou raramente utilizadas</strong> [8]. É necessário compreender que informações o usuário necessita e quais opções devem estar disponíveis no momento, para entregar somente o suficiente, nem mais, nem menos.
                </p>

                <p class="Texto">
                    Para isto, os elementos visuais da interface devem apoiar ​​os objetivos principais do usuário. Além disso, a sequência da interação e o acesso aos objetos e operações devem ser compatíveis com o modo pelo qual o usuário realiza suas tarefas.
                </p>

                <p class="Texto">
                    Um bom exemplo de evolução de interface que buscou entregar uma estética e design minimalistas é a interface do buscador Google. Veja na <strong>Figura 28</strong> a evolução da interface do Google ao longo dos anos. É possível ver que houve uma redução visual de informações e nos elementos da interface que tornou cada nova versão mais minimalista e focada em sua função principal: buscar algo na Internet.
                </p>


                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 28:</strong> Evolução da interface do buscador Google
                    </p>
                    <a href="imagens/figura28.png" data-toggle="lightbox" data-footer="Evolução da interface do buscador Google">
                        <img class="img-fluid wow fadeIn" src="imagens/figura28.png" alt="Evolução da interface do buscador Google">
                    </a>
                    <p class="FonteFigura">Fonte: Hackernoon.</p>
                </div>

                <br><br>

                <div class="text-center">
                    <a href="Topico03.7.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico03.9.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
                </div>

                <!-- SCRIPT LIGHTBOX -->
                <script>
                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                        event.preventDefault();
                        $(this).ekkoLightbox();
                    });
                </script>

            </div> <!-- CLASS PAGE TITLE FIM -->
        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>