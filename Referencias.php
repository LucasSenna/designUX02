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

                <h3 class="font-bold">Referências</h3>
                <hr>

                <ul style="list-style: none;">
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        ASSOCIAÇÃO BRASILEIRA DE NORMAS TÉCNICAS. NBR 9241-11: <strong>Requisitos ergonômicos para trabalho de escritórios com computadores</strong>. Parte 11-Orientações sobre usabilidade. 2002.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        ISO. <strong>ISO/IEC 25000</strong> Software and system engineering–Software product Quality Requirements and Evaluation (SQuaRE) - Guide to SQuaRE. International Organization for Standarization, 2014.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        ISO. <strong>ISO/IEC 25010</strong> 2011 (2011). Systems and software engineering--Systems and software Quality Requirements and Evaluation (SQuaRE)--System and software quality models. Geneva, 2011.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        ABREU, L. M. <strong>Usabilidade de telefones celulares com base em critérios ergonômicos</strong>. Tese de Mestrado pelo Programa de Pós-Graduação em Design do Departamento de Artes & Design, PUC-Rio. Rio de Janeiro. 2005.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        REBELO, Irla B. <strong>Usabilidade e suas metas</strong>. Apostila. Brasília, DF. Última atualização em novembro de 2009. Disponível em <a href="irlabr.wordpresss.com" target="_blank">irlabr.wordpresss.com</a>.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        NIELSEN, J. (2012, January 3). <strong>Usability 101: Introduction to Usability</strong>. Acessado em novembro de 2020. Disponível em <a href="https://www.nngroup.com/articles/usability-101-introduction-to-usability/" target="_blank">https://www.nngroup.com/articles /usability-101-introduction-to-usability</a>.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        NIELSEN, J. (1994, April 24). <strong>10 Usability Heuristics for User Interface Design</strong>. Retrieved November 16, 2020, from <a href="https://www.nngroup.com/articles/ten-usability-heuristics" target="_blank">https://www.nngroup.com/articles /ten-usability-heuristics</a>.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        Nielsen, J. (1994a). <strong>Enhancing the explanatory power of usability heuristics</strong>. Proc. ACM CHI'94 Conf. (Boston, MA, April 24-28), 152-158.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        Nielsen, J. (1994b). <strong>Heuristic evaluation</strong>. In Nielsen, J., and Mack, R.L. (Eds.), Usability Inspection Methods, John Wiley & Sons, New York, NY.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        Gordon, Kelley (March 1, 2020). <strong>5 Principles of Visual Design in UX</strong>. Retrieved November 22, 2020, from <a href="https://www.nngroup.com/articles/principles-visual-design" target="_blank">https://www.nngroup.com/articles /principles-visual-design</a>.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        CARELMAN, Jacques. <strong>Catalogue d'objets introuvables</strong>. Balland, 1980.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        NORMAN, Donald A. <strong>O design do dia a dia</strong> Editora Rocco, 2018.
                    </li>
                </ul>

                <br><br>

                <div class="text-center">
                    <a href="Topico04.2.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="#" type="button" class="btn btn-outline-success btn-sm">AVALIAÇÃO</a>
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