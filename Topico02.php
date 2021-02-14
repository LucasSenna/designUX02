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

                <h3 class="font-bold">2.0. Usabilidade</h3>
                <hr>

                <p class="Texto">
                    Você já conhecia o termo usabilidade? Se você fez o curso de “O que design ux?” se deparou com o termo algumas vezes no material. Vamos recordar? Em 1994, as Heurísticas de Nielsen trouxeram critérios de boas práticas de usabilidade e apresentaram um método de avaliação de inspeção para garantir sua aplicação. Porém, antes desse período, já se utilizava o termo precursor da usabilidade: a <a tabindex="0" class="btn btn-outline-success" role="button" data-toggle="popover" data-trigger="focus" data-placement="left" title="O conceito de ergonomia é importante para entendermos como passamos a utilizar o termo usabilidade em projetos. A ergonomia é um conceito amplo e atualmente estas duas áreas de estudo se mesclam. Entretanto, aqui vamos focar em usabilidade, mais comumente utilizada na área de sistemas para computadores. O que não impede de expandirmos o conceito de usabilidade para coisas físicas, ou vice-versa."><strong>CLIQUE AQUI PARA SABER O CONCEITO DE ERGONOMIA</strong></a> 
                </p>



                <p class="Texto">
                    Quando imaginamos ergonomia, pensamos em cadeiras ajustadas, visores na altura dos olhos, carregamento de peso de forma correta ou outras atividades físicas do dia a dia. Porém a ergonomia hoje engloba muitas outras áreas de aplicação. De acordo com a IEA - Associação Internacional de Ergonomia, a Ergonomia (ou Fatores Humanos) é uma disciplina de estudo relacionada às interações entre os seres humanos e outros elementos ou sistemas, e aplica teorias, princípios, dados e métodos a fim de otimizar o bem estar humano e o desempenho global do sistema. Os ergonomistas tornam tarefas, postos de trabalho, produtos, ambientes e sistemas compatíveis com as necessidades, habilidades e limitações das pessoas.
                </p>


                <p class="Texto">
                    Dentro do contexto de usabilidade, há diversas definições formais do termo. Três definições são importantes para o contexto de desenvolvimento de sistemas: o da NBR 9241-11, o da ISO 25000 e a partir das heurísticas de Nielsen (<strong>Figura 3</strong>). Cada uma destas definições entrega um conjunto genérico a se considerar, como, por exemplo, a ISO 25000 entrega caraterísticas de qualidade de software, das quais uma é a usabilidade. Os próximos subtópicos explicarão cada uma destas definições.
                </p>

                <div class="text-center">7
                    <p class="TituloFigura"><strong>Figura 3:</strong> Definições de usabilidade</p>
                    <a href="imagens/figura03.png" data-toggle="lightbox" data-footer="Definições de usabilidade">
                        <img class="img-fluid wow fadeIn" src="imagens/figura03.png" alt="Definições de usabilidade">
                    </a>
                    <p class="FonteFigura">Fonte: autor</p>
                </div>
                <hr>

                <br><br>

                <div class="text-center">
                    <a href="Topico01.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico02.1.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
                </div>

                <!-- SCRIPT LIGHTBOX -->
                <script>
                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                        event.preventDefault();
                        $(this).ekkoLightbox();
                    });

                    $(function() {
                        $('[data-toggle="popover"]').popover()
                    })

                    $('.popover-dismiss').popover({
                        trigger: 'focus'
                    })
                </script>

            </div> <!-- CLASS PAGE TITLE FIM -->
        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>