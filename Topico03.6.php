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
                    Você conhece todos os programas da sua máquina de lavar roupa? Você se recorda de como deve colocar o sabão, o amaciante e quanto tempo levará para você retirar suas roupas limpas? Essa heurística irá atuar nestas questões. Veja o exemplo da torneira da <strong>Figura 25</strong>. Imagine utilizá-la pela primeira vez, como você faria? Após conhecer como funciona, se você se deparasse com ela novamente após 1 ano, se lembraria como abri-la? Esta é uma brincadeira de uma empresa de torneiras, que, apesar da irreverência, pode ser semelhante a problemas encontrados em interfaces reais.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 25:</strong> Torneira com abertura diferenciada
                    </p>
                    <a href="imagens/figura25.png" data-toggle="lightbox" data-footer="Torneira com abertura diferenciada">
                        <img class="img-fluid" src="imagens/figura25.png" alt="Torneira com abertura diferenciada" width="600" height="600">
                    </a>
                    <p class="FonteFigura">Fonte: Bem Legaus.</p>
                </div>
                <hr>

                <!-- Curiosidade -->
                <div>
                    <p class="CuriosidadeTitulo"> Curiosidade</p>
                    <p class="CuriosidadeTexto">Se você achou interessante a torneira incomum, indico conhecer o Jacques Carelman. Um ilustrador francês que publicou em 1969 um catálogo de objetos improváveis [12] que são inutilizáveis, estranhos e por quebrarem a lógica, isto é, fugir dos modelos mentais que temos dos objetos, os exemplos são divertidos. Conheça algumas peças do livro em "<a href="https://www.laboiteverte.fr/les-objets-introuvables-de-jacques-carelman/" target="_blank">Les objets introuvables de Jacques Carelman</a>".</p>
                </div>
                <hr>

                <p class="Texto">
                    <strong>Objetos, ações e opções devem estar visíveis e devem ser coerentes em sua apresentação</strong>. <a tabindex="0" class="btn btn-lg btn-outline-success" role="button" data-toggle="popover" data-trigger="focus" data-placement="right" title="Instruções de uso do sistema devem ser fáceis de serem encontradas ou facilmente recuperadas sempre que necessário. De acordo com Nielsen [8], os humanos têm memórias de curto prazo limitadas. Então, as interfaces que promovem o reconhecimento reduzem a quantidade de esforço cognitivo exigido dos usuários."><strong>CLIQUE AQUI PARA VISUALIZAR O EXEMPLO</strong></a>
                </p>
                <hr>

                <p class="Texto">
                    Para aplicar o reconhecimento em vez de memorização, é possível utilizar-se de padrões, como ícones comuns para determinadas ações. Uma outra forma de aplicar o reconhecimento em vez de memorização, é entregar opções em vez de pedir respostas abertas. Por exemplo, campos <em>autocomplete</em>, que completam o que está sendo digitado. Ao mostrar os elementos de diálogo, o design de uma interface permite que o usuário faça suas escolhas sem a necessidade de lembrar um termo específico. Veja um exemplo deste componente na <strong>Figura 26</strong>.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 26:</strong> Campo <em>autocomplete</em>
                    </p>
                    <a href="imagens/figura26.png" data-toggle="lightbox" data-footer="Campo <em>autocomplete</em>">
                        <img class="img-fluid" src="imagens/figura26.png" alt="Campo <em>autocomplete</em>">
                    </a>
                    <p class="FonteFigura">Fonte: JQueryUi.</p>
                </div>

                <br><br>

                <div class="text-center">
                    <a href="Topico03.5.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico03.7.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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