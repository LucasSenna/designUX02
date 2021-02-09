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

                <h3 class="font-bold">4.1. Por que avaliar?</h3>
                <hr>

                <p class="Texto">
                    Conhecer critérios de qualidade e seguir processos de fabricação que busquem criar produtos adequados a esses critérios nem sempre resultam em produtos de qualidade [7]. É necessário realizar avaliações do produto ao final ou ao longo deste processo. Estas avaliações podem conter diferentes perspectivas: de quem o concebe, <strong>de quem o constrói e de quem o utiliza</strong>.
                </p>

                <p class="Texto">
                    Avaliar a qualidade de uso e corrigir os problemas identificados contribuem para aumentar a produtividade dos usuários, diminuir o número e a gravidade dos erros cometidos durante o uso, e aumentar a satisfação dos usuários [7]. Este impacto também se reflete em como o produto é aceito por quem o utiliza, ou, para fins comerciais, isto se reflete na aceitação e permanência de um produto no mercado.
                </p>

                <p class="Texto">
                    A avaliação pode ocorrer de três formas: Investigação, Inspeção e Observação. Veja as descrições de cada uma:
                </p>

                Clique em cada uma das formas para saber sua descrição.
                <br><br>

                <ul class="Texto pl-5">
                    <li><a tabindex="0" class="btn btn-LG btn-outline-success" role="button" data-toggle="popover" data-trigger="focus" data-placement="right" title="Que ocorre através de coleta de informação e opinião dos usuários acerca de suas necessidades e desejos. Por exemplo, questionários e entrevistas."><strong>INVESTIGAÇÃO</strong></a></li><br>
                    <li><a tabindex="0" class="btn btn-LG btn-outline-success" role="button" data-toggle="popover" data-trigger="focus" data-placement="right" title="São realizadas por especialistas e não envolvem diretamente os usuários. Por exemplo, avaliação heurística."><strong>INSPEÇÃO</strong></a></li><br>
                    <li><a tabindex="0" class="btn btn-LG btn-outline-success" role="button" data-toggle="popover" data-trigger="focus" data-placement="right" title="Coletam os dados sobre o uso do sistema pelos usuários, que pode ocorrer em laboratório ou em campo. Por exemplo, teste de usabilidade com usuários reais."><strong>OBSERVAÇÃO</strong></a></li><br>
                </ul>

                <p class="Texto pl-5">
                    Uma avaliação pode buscar respostas sobre pontos específicos, como:
                </p>

                <ul class="Texto pl-5">
                    <li>a apropriação de tecnologia pelos usuários</li>
                    <li>os objetivos e necessidade dos usuários;</li>
                    <li>quais tecnologias são necessárias para atingir os objetivos;</li>
                    <li>atividades antes e depois da intervenção com o sistema;</li>
                    <li>a conformidade com um padrão;</li>
                    <li>ideias e alternativas de design; e</li>
                    <li>diferentes alternativas de solução.</li>
                </ul>

                <p class="Texto">
                    Para realizar uma avaliação é necessário decidir como ela irá ocorrer, em que contexto (laboratório ou real), quantas e quais pessoas irão participar, quais dados irão ser coletados (quantitativos ou qualitativos), que método será usado na análise dos dados e outros critérios fundamentais para que a avaliação seja válida.
                </p>

                <br><br>

                <div class="text-center">
                    <a href="Topico04.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico04.2.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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