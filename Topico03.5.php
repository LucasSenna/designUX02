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

                <h3 class="font-bold">3.5. Prevenção de erros</h3>
                <hr>

                <p class="Texto">
                    É imprescindível que se evite situações de erro para ter uma boa interação. Esta heurística trata de conhecer as <strong>situações que mais provocam erros e modificar a interface para que estes erros não ocorram</strong>. Por exemplo, sempre que houver uma ação decisiva, é importante apresentar uma opção de confirmar esta ação ou cancelar antes de executá-la.
                </p>

                <p class="Texto">
                    Um exemplo prático da prevenção de erros é o que acontece em cadastros quando os campos obrigatórios não são preenchidos ou são preenchidos de forma incorreta. A <strong>Figura 23</strong> apresenta esse tipo de retorno que acontece de forma contextual, facilitando a correção.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 23:</strong> Exemplos de cadastro indicando possíveis erros</p>
                    <a href="imagens/figura23.png" data-toggle="lightbox" data-footer="Exemplos de cadastro indicando possíveis erros">
                        <img class="img-fluid" src="imagens/figura23.png" alt="Exemplos de cadastro indicando possíveis erros" width="600" height="600">
                    </a>
                    <p class="FonteFigura">Fonte: autor.</p>
                </div>
                <hr>

                <p class="Texto">
                    No exemplo da Figura 24, vemos a prevenção de erro na ortografia de um termo buscado no buscador web da Google.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 24:</strong> Exemplo de prevenção de erro em buscador web</p>
                    <a href="imagens/figura24.png" data-toggle="lightbox" data-footer="Exemplo de prevenção de erro em buscador web">
                        <img class="img-fluid" src="imagens/figura24.png" alt="Exemplo de prevenção de erro em buscador web" width="600" height="600">
                    </a>
                    <p class="FonteFigura">Fonte: Google.</p>
                </div>
                <hr>

                <p class="Texto">
                    De acordo com Nielsen [8], existem dois tipos de erros: <strong>deslizes</strong> (<em>slips</em>) e <strong>erros</strong> (<em>errors</em>). Deslizes são erros inconscientes causados ​​por desatenção. Erros são conscientes e baseados em uma incompatibilidade entre o modelo mental do usuário e o design. Erros são mais graves e requerem mais atenção no design.
                </p>



                <br><br>

                <div class="text-center">
                    <a href="Topico03.4.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico03.6.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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