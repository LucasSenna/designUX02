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

                <h3 class="font-bold">2.1. NBR ISO 9241-11</h3>
                <hr>

                <p class="Texto">
                    A ABNT NBR ISO 9241-11 (<strong>Figura 4</strong>) é uma norma consolidada pela ABNT – Associação Brasileira de Normas Técnicas que tem como base a ISO 9241-11:1998. Esta norma define o termo usabilidade e especifica o que deve ser considerado numa avaliação de usabilidade em termos de medidas de desempenho e satisfação do usuário [1]. A ISO ainda cita como descrever o contexto de uso de um produto para hardware, software ou serviços [1].
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 4:</strong> ABNT NBR ISO 9241-11</p>
                    <a href="imagens/figura04.png" data-toggle="lightbox" data-footer="ABNT NBR ISO 9241-11">
                        <img class="img-fluid" src="imagens/figura04.png" alt="ABNT NBR ISO 9241-11" height="800" width="800">
                    </a>
                    <p class="FonteFigura">Fonte: NBR 9241-11.</p>
                </div>
                <hr>

                <p class="Texto">
                    De acordo com a norma:
                </p>

                <div class="container">
                    <div class="row">
                        <div class="col">
                        </div>
                        <div class="col-10 Texto">
                            <strong>A usabilidade é a medida pela qual um produto pode ser usado por usuários específicos para alcançar objetivos específicos com efetividade, eficiência e satisfação em um contexto de uso específico</strong> (NBR 9241-11) [1].
                        </div>
                    </div>
                </div>
                <hr>

                <p class="Texto">
                    Para que o conceito fique, a medida é o valor resultante de uma medição. As três medidas citadas pela norma são:
                </p>

                (clique na medida para saber a sua descrição)

                <p class="Texto pl-5">
                    <ul class="Texto">
                        <li><a tabindex="0" class="btn btn-LG btn-outline-success" role="button" data-toggle="popover" data-trigger="focus" data-placement="right" title="É a medida em que se verifica o quanto o usuário alcançou os objetivos iniciais de interação. Pode ser avaliada considerando a finalização de uma tarefa ou em termos de qualidade do resultado obtido."><strong>EFETIVIDADE</strong></a></li><br>
                        <li> <a tabindex="0" class="btn btn-LG btn-outline-success" role="button" data-toggle="popover" data-trigger="focus" data-placement="right" title="Se refere à quantidade de esforço e recursos necessários para se chegar a um determinado objetivo. Os desvios que o usuário faz durante a interação e a quantidade de erros cometidos podem servir para avaliar o nível de eficiência do site."><strong>EFICIÊNCIA</strong></a></li><br>
                        <li> <a tabindex="0" class="btn btn-LG btn-outline-success" role="button" data-toggle="popover" data-trigger="focus" data-placement="right" title="Considerada a mais difícil de medir, esta medida se refere ao nível de conforto que o usuário sente ao utilizar a interface e qual o nível de aceitação."><strong>SATISFAÇÃO DO USUÁRIO</strong></a></li>
                    </ul>
                </p>
                <hr>

                <p class="Texto">
                    A <strong>Figura 5</strong> apresenta uma figura da norma que resume esse conjunto que forma a estrutura de usabilidade proposta pela norma. A norma apresenta também outras perspectivas da usabilidade como: facilidade de aprendizado; facilidade de memorização; e baixa taxa de erros.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 5:</strong> Estrutura de usabilidade</p>
                    <a href="imagens/figura05.png" data-toggle="lightbox" data-footer="Estrutura de usabilidade">
                        <img class="img-fluid" src="imagens/figura05.png" alt="Estrutura de usabilidade" width="600" height="600">
                    </a>
                    <p class="FonteFigura">Fonte: NBR 9241-11.</p>
                </div>
                <hr>

                <br><br>

                <div class="text-center">
                    <a href="Topico02.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico02.2.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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