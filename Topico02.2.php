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

                <h3 class="font-bold">2.2. ISO/IEC 25000 (SQuaRE)</h3>
                <hr>

                <p class="Texto">
                    A série de normas ISO/IEC 25000 ou, como é conhecida, SQuaRE (Requisitos e Avaliação de Qualidade de Sistemas e Software) segue na mesma linha de avaliação de software, porém, diferente da ISO 9241-11, ela trata de outros âmbitos da <strong>avaliação da qualidade de linha de produtos de software</strong> [2]. Esse conjunto de normas é dividida da seguinte forma:
                </p>

                <p class="Texto pl-5">
                    <ul class="Texto">
                        <li>ISO/IEC 2500n – Divisão de Gestão da Qualidade</li>
                        <li>ISO/IEC 2501n – Divisão de Modelo de Qualidade</li>
                        <li>ISO/IEC 2502n – Divisão de Medição de Qualidade</li>
                        <li>ISO/IEC 2503n – Divisão de Requisitos de Qualidade</li>
                        <li>ISO/IEC 2504n – Divisão de Avaliação da Qualidade</li>
                    </ul>
                </p>
                <hr>

                <p class="Texto">
                    A divisão de Medição de Qualidade (ISO/IEC 2501n) inclui um modelo de referência para medições da qualidade de um produto, definições matemáticas de medidas e orientações práticas para sua aplicação. É nessa divisão que a norma estabelece usabilidade como característica de qualidade e define medições. A definição formal de usabilidade da norma é:
                </p>

                <div class="container">
                    <div class="row">
                        <div class="col">
                        </div>
                        <div class="col-10 Texto">
                            <strong>Usabilidade - Grau em que um produto ou sistema pode ser usado por usuários específicos para atingir metas especificadas com eficácia, eficiência e satisfação em um contexto específico de uso</strong> [3].
                        </div>
                    </div>
                </div>
                <hr>

                <p class="Texto">
                    Dentro desta especificação, a característica usabilidade é composta das seguintes subcaracterísticas:
                </p>

                <p class="Texto pl-5">
                    <ul class="Texto">
                        <li>Reconhecimento de Adequabilidade</li>
                        <li>Aprendizagem</li>
                        <li>Operacionalidade</li>
                        <li>Proteção Contra Erros do Usuário</li>
                        <li>Estética da Interface do Usuário</li>
                        <li>Acessibilidade</li>
                    </ul>
                </p>
                <hr>

                <p class="Texto">
                    A norma, além de estabelecer um <strong>modelo de avaliação de produto</strong>, também estabelece um <strong>modelo para avaliação de uso</strong>, que também é considerado dentro do contexto de usabilidade. De acordo com a ISO/IEC 25010, a qualidade de uso se refere à capacidade do produto de software de permitir que os usuários atinjam metas com eficácia, produtividade, segurança e satisfação no contexto de uso do sistema [3]. Para cada uma dessas características são definidos atributos de qualidade, como pode ser visto na Figura 6.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 6:</strong> Qualidade de uso em ISO/IEC 25010</p>
                    <a href="imagens/figura06.png" data-toggle="lightbox" data-footer="Qualidade de uso em ISO/IEC 25010">
                        <img class="img-fluid wow fadeIn" src="imagens/figura06.png" alt="Qualidade de uso em ISO/IEC 25010" width="700" height="700">
                    </a>
                    <p class="FonteFigura">Fonte: Adaptado de ISO/IEC 25010.</p>
                </div>
                <hr>

                <!-- Saiba Mais -->
                <div>
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <p class="SaibaMaisTexto">Ficou curioso sobre as outras características de qualidade de produto da SQuaRE? Veja na <strong>Figura 7</strong> quais características de qualidade de produto são incluídas além de usabilidade.</p>
                </div>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 7:</strong> Características de qualidade de produto em ISO/IEC 25010</p>
                    <a href="imagens/figura07.png wow fadeInDown" data-toggle="lightbox" data-footer="Características de qualidade de produto em ISO/IEC 25010">
                        <img class="img-fluid wow fadeIn" src="imagens/figura07.png" alt="Características de qualidade de produto em ISO/IEC 25010">
                    </a>
                    <p class="FonteFigura">Fonte: ISO/IEC 25010 [3].</p>
                </div>
                <hr>

                <br><br>

                <div class="text-center">
                    <a href="Topico02.1.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico02.3.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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