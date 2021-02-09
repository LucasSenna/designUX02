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

                <h3 class="font-bold">3.0. Heurísticas de Nielsen</h3>
                <hr>

                <p class="Texto">
                    Como já foi dito anteriormente, Nielsen consolidou um conjunto de 10 heurísticas de usabilidade, que são amplamente utilizadas hoje [8]. No subtópicos a seguir veremos em detalhes cada heurística de forma aplicada a interfaces reais. A lista abaixo apresenta o título em português e em inglês das heurísticas:
                </p>

                <ul class="Texto pl-5">
                    <li>Visibilidade de qual estado estamos no sistema (<em>Visibility of system status</em>)</li>
                    <li>Correspondência entre o sistema e o mundo real (<em>Match between system and the real world</em>)</li>
                    <li>Liberdade de controle fácil pro usuário (<em>User control and freedom</em>)</li>
                    <li>Consistência e padrões (<em>Consistency and standards</em>)</li>
                    <li>Prevenção de erros (<em>Error prevention</em>)</li>
                    <li>Reconhecimento em vez de memorização (<em>Recognition rather than recall</em>)</li>
                    <li>Flexibilidade e eficiência de uso (<em>Flexibility and efficiency of use</em>)</li>
                    <li>Estética e design minimalista (<em>Aesthetic and minimalist design</em>)</li>
                    <li>Ajude os usuários a reconhecerem, diagnosticarem e recuperarem-se de erros (<em>Help users recognize, diagnose, and recover from errors</em>)</li>
                    <li>Ajuda e documentação (<em>Help and documentation</em>)</li>
                </ul>

                <br><br>

                <div class="text-center">
                    <a href="Topico02.4.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico03.1.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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