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

                <h3 class="font-bold">4. Avaliação de usabilidade</h3>
                <hr>

                <p class="Texto">
                    Nesta sessão voltamos ao conjunto de perguntas apresentadas no início deste documento. A pergunta 3 questiona “Com que nível de certeza é possível afirmar que esse é um comportamento ideal para seus usuários?”. A usabilidade é passível de avaliação. Vamos entender o básico de avaliações nas próximas subseções.
                </p>

                <br><br>

                <div class="text-center">
                    <a href="Topico03.10.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico04.1.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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