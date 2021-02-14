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

                <h3 class="font-bold">3.1. Visibilidade de qual estado estamos no sistema</h3>
                <hr>

                <p class="Texto">
                    O sistema deve informar continuamente ao usuário sobre o que ele está fazendo e a situação atual do sistema. Isto é, ele deve informar se há algum processamento que está sendo realizado internamente e informar, por exemplo, se uma requisição deu certo ou errado ou quanto tempo falta para finalizá-la. O que seria isto na prática? Uma forma simples de entender o <em>feedback</em> é o botão do elevador indicando em qual andar você e outras pessoas irão descer. Veja a <strong>Figura 14</strong>.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 14:</strong> Botão indicando o andar no elevador</p>
                    <a href="imagens/figura14.png" data-toggle="lightbox" data-footer="Botão indicando o andar no elevador">
                        <img class="img-fluid wow fadeUp" src="imagens/figura14.png" alt="Botão indicando o andar no elevador" width="300" height="200">
                    </a>
                    <p class="FonteFigura">Fonte: Google.</p>
                </div>
                <hr>

                <p class="Texto">
                    Ainda no exemplo do elevador, suponha que você apertou o botão de um andar e ele não ficou marcado, o que você faria? Provavelmente você entenderia que houve um problema ao apertar o botão e apertaria novamente. Se não tivesse esse retorno do sistema, como saberia se deu certo ou errado?
                </p>

                <p class="Texto">
                    Essa informação sobre o estado do sistema deve ser dada o mais rápido possível. Além disso, deve ser clara e significativa. Por exemplo, não faz sentido apresentar ao usuário que um dado do sistema está sendo salvo no banco de dados da aplicação, já que para o usuário esta informação pode não ser bem compreendida, por ser muito técnica. Neste caso, pedir para aguardar e informar que está salvando seria o suficiente.
                </p>

                <p class="Texto">
                    A <strong>Figura 15</strong> traz mais três exemplos de como dar visibilidade ao estado do sistema, descritos abaixo:
                </p>

                <ul class="Texto pl-5">
                    <li>Na primeira imagem, há uma informação sobre uma atualização salva com sucesso. Essa informação está bem posicionada ao lado do botão salvar, permitindo que seja visualizada caso a pessoa pense em salvar novamente ou fique em dúvida</li>
                    <li>Na segunda imagem vemos um clássico dessa heurística, um modal que informa quantos porcentos foram concluídos de uma cópia de arquivos. A partir dele é possível estimar quanto ainda falta para finalizar a atividade.</li>
                    <li>Na terceira vemos um modal indicando os estados de uma conexão que depende de três pontos ativos para estar ativa. Na imagem o terceiro ponto está com problemas, que é indicado pela cor cinza e pelo ícone em vermelho que indica atenção. A imagem passa a informação de que não há conexão e já indica onde está o problema.</li>
                </ul>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 15:</strong> Exemplos de como dar visibilidade ao estado do sistema</p>
                    <a href="imagens/figura15.1.png" data-toggle="lightbox" data-footer="Exemplos de como dar visibilidade ao estado do sistema">
                        <img class="img-fluid wow fadeInDown" src="imagens/figura15.1.png" alt="Exemplos de como dar visibilidade ao estado do sistema">
                    </a><br><br>
                    <a href="imagens/figura15.2.png" data-toggle="lightbox" data-footer="Exemplos de como dar visibilidade ao estado do sistema">
                        <img class="img-fluid wow fadeIn" src="imagens/figura15.2.png" alt="Exemplos de como dar visibilidade ao estado do sistema">
                    </a><br><br><br>
                    <a href="imagens/figura15.3.png" data-toggle="lightbox" data-footer="Exemplos de como dar visibilidade ao estado do sistema">
                        <img class="img-fluid wow fadeInUp" src="imagens/figura15.3.png" alt="Exemplos de como dar visibilidade ao estado do sistema">
                    </a>
                    <p class="FonteFigura">Fonte: Autor.</p>
                </div>
                <hr>

                <p class="Texto">
                    Além do retorno de ações mais comuns, tenha atenção nas informações cruciais do sistema. De acordo com Nielsen, nenhuma ação com consequências para os usuários deve ser realizada sem informá-los [8] e isto é necessário para estabelecer confiança no sistema.
                </p>

                <br><br>

                <div class="text-center">
                    <a href="Topico03.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico03.2.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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