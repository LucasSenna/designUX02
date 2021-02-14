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

                <h3 class="font-bold">3.4. Consistência e padrões</h3>
                <hr>

                <p class="Texto">
                    <strong>Um mesmo comando ou ação deve ter sempre o mesmo efeito</strong>. A mesma operação deve ser apresentada na mesma localização e deve ser formatada ou apresentada da mesma maneira para facilitar o reconhecimento. Desta forma você garante consistência, que é esperada em diversos níveis: <strong>consistência</strong> entre os sistemas de uma mesma organização (interna) ou consistência entre padrões globais (externa). Essa consistência é também aplicada aos termos utilizados como títulos e menus.
                </p>

                <p class="Texto">
                    Para desenvolvimento de interface sistemas, existem diversos padrões bem estabelecidos. Um destes é o Material Design (<strong>Figura 22</strong>) que possui regras de design para aplicações diversas e trata de componentes, cores e outras características da interface e interação de um sistema.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 22:</strong> Material Design</p>
                    <a href="imagens/figura22.png" data-toggle="lightbox" data-footer="Material Design">
                        <img class="img-fluid wow fadeIn" src="imagens/figura22.png" alt="Material Design" width="600" height="600">
                    </a>
                    <p class="FonteFigura">Fonte: Material Design.</p>
                </div>
                <hr>

                <p class="Texto">
                    Utilizar padrões torna as interfaces mais fáceis de aprender. Sistemas que seguem modelos conceituais bem estabelecidos são fáceis de usar. Apesar disso, é comum se questionar se: é possível inovar seguindo padrões? Sim. Tanto é possível, que o próprio Material Design apresenta exemplos de interfaces que conseguem inovar respeitando as regras ou negando algumas com uma justificativa plausível.
                </p>

                <!-- Saiba Mais -->
                <div>
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <p class="SaibaMaisTexto">Conheça os exemplos de interfaces no Material Design, chamados de <em>Material Studies</em>, e veja como um padrão pode tomar diferentes formatos:<a href="https://material.io/design/material-studies/about-our-material-studies.html" target="_blank"> Material Studies </a>.</p>
                </div>

                <br><br>

                <div class="text-center">
                    <a href="Topico03.3.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico03.5.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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