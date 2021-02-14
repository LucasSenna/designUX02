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

                <h3 class="font-bold">3.7. Flexibilidade e eficiência de uso</h3>
                <hr>

                <p class="Texto">
                    A flexibilidade e eficiência de uso diz respeito <strong>a atalhos para usuários experientes executarem as operações ou recuperarem informações mais rapidamente</strong>. A flexibilidade das interfaces tem a finalidade de tornar a atividade mais eficaz. Na prática isso podem ser:
                </p>

                <ul class="Texto pl-5">
                    <li>abreviações, </li>
                    <li>teclas de função, </li>
                    <li>duplo clique no mouse,</li>
                    <li>customizações,</li>
                    <li>função de volta em sistemas hipertexto e outros.</li>
                </ul>

                <p class="Texto">
                    Um exemplo prático são os atalhos que utilizamos em sistemas para edição de texto, como Microsoft Word. A <strong>Figura 27</strong> apresenta atalhos usados com frequência no sistema. Quantos destes você sabe de cor?
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 27:</strong> Atalhos do <em>Microsoft Word</em>
                    </p>
                    <a href="imagens/figura27.png" data-toggle="lightbox" data-footer="Atalhos do <em>Microsoft Word</em>">
                        <img class="img-fluid wow fadeIn" src="imagens/figura27.png" alt="Atalhos do <em>Microsoft Word</em>">
                    </a>
                    <p class="FonteFigura">Fonte: Atalhos de teclado do Word - Suporte do Office.</p>
                </div>


                <br><br>

                <div class="text-center">
                    <a href="Topico03.6.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico03.8.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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