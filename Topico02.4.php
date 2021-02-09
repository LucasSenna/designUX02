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

                <h3 class="font-bold">2.4. O que não é Usual?</h3>
                <hr>

                <p class="Texto">
                    Antes de passarmos às heurísticas de forma detalhada, é interessante reconhecer o que não é usual e como podemos identificar onde a usabilidade foi negligenciada.
                </p>

                <!-- Fique Atento -->
                <div>
                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                    <p class="FiqueAtentoTexto">Assim como um musicista sofre com o desafinar generalizado da hora dos parabéns em festas de aniversário, pessoas que estudam design UX tendem a sofrer e questionar as interfaces do dia a dia. Antecipo que será difícil desconsiderar a torneira que não “abre pro lado certo” ou a porta que “não indica como deve ser aberta” ou a máquina de lavar roupa que “tem programas de lavagem desnecessários e pouco utilizados”. <strong>Usabilidade é um conhecimento prático, que pode atuar na forma como você planeja sua vida, seu trabalho, suas atividades e muito mais</strong>.</p>
                </div>
                <hr>

                <p class="Texto">
                    Um dos objetos cotidianos que chama muita atenção com relação à usabilidade é o elevador. Não é incomum pessoas passarem por experiências confusas em elevadores. Os elevadores em geral não possuem uma padronização de painel, dessa forma é comum encontrar um elevador que nos perdemos facilmente nas opções. Isso não seria um problema se os painéis fossem desenhados para facilitar a aprendizagem no uso. A <strong>Figura 10</strong> mostra um painel em que infringe o fator de <strong>segurança do uso</strong>, colocando uma mensagem para não entrar se a cabine não estiver bem posicionada. A mensagem, porém, está dentro do elevador, o que impede de evitar o real problema cuja mensagem está tentando evitar. O informe, apesar de ter um objetivo de segurança, perde o significado.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 10:</strong> Painel de elevador</p>
                    <a href="imagens/figura10.png" data-toggle="lightbox" data-footer="Painel de elevador">
                        <img class="img-fluid" src="imagens/figura10.png" alt="Painel de elevador" width="400" height="200">
                    </a>
                    <p class="FonteFigura">Fonte: autor.</p>
                </div>
                <hr>

                <p class="Texto">
                    Como outro exemplo, temos interfaces que apresentam códigos e mensagens não decifráveis para indicar um erro. Na Figura 11 vemos uma mensagem de erro que se destaca na tela pelo seu tamanho e por não ser facilmente compreendida. Esta foi uma mensagem retornada pelo aplicativo Uber. Neste exemplo, vemos que problemas de usabilidade podem ocorrer também em aplicativos muito bem consolidados no mercado. Aplicativos móveis são feitos para rodar em muitas plataformas, em muitos formatos de tela e com restrições distintas para cada tipo de dispositivo. Garantir que não haja falhas no sistema e usabilidade para toda essa diversidade de dispositivos torna a aplicação de sistemas um desafio à equipe de desenvolvimento.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 11:</strong> Mensagem de erro inapropriadar</p>
                    <a href="imagens/figura11.png" data-toggle="lightbox" data-footer="Mensagem de erro inapropriada">
                        <img class="img-fluid" src="imagens/figura11.png" alt="Mensagem de erro inapropriada" width="260" height="200">
                    </a>
                    <p class="FonteFigura">Fonte: autor.</p>
                </div>
                <hr>

                <p class="Texto">
                    O próximo exemplo (<strong>Figura 12</strong>) mostra uma resposta inesperada do sistema que causou confusão. Uma plataforma de submissão de artigos científicos apresentou uma mensagem de sucesso de submissão que dizia “The file has been uploaded”, que significa “O arquivo foi carregado!” e indicaria que tinha conseguido realizar a submissão corretamente, como esperado. Porém, a mensagem está em vermelho. Na produção de interfaces é comum tratarmos o olhar “de relance”, em inglês “at a glance”, que significa aquele olhar rápido em algo. Um olhar de relance fez com que o texto fosse escondido pela mensagem que a cor transmitiu: a de erro. <strong>A cor vermelha deve sempre ser usada com cautela,<strong> em interfaces para que não ocorra algo semelhante.
                </p>

                <div>
                    <p class="FiqueAtentoTitulo pl-5"> Fique Atento</p>
                    <p class="FiqueAtentoTexto pl-5">As cores podem transmitir informações em interfaces. Seja estabelecendo a hierarquia do conteúdo [11] ou indicando informações, como erro. As cores também estão relacionadas a interfaces com relação à acessibilidade e devem, por exemplo, respeitar um nível de contraste aceitável para facilitar a leitura.</p>
                </div>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 12:</strong> Mensagem de ação realizada com sucesso com cor inesperada</p>
                    <a href="imagens/figura12.png" data-toggle="lightbox" data-footer="Mensagem de erro inapropriada">
                        <img class="img-fluid" src="imagens/figura12.png" alt="Mensagem de erro inapropriada">
                    </a>
                    <p class="FonteFigura">Fonte: autor.</p>
                </div>
                <hr>

                <!-- Atividade -->
                <div>
                    <p class="AtividadeTitulo"> <br>Atividade 2</p>
                    <p class="AtividadeTexto">Reflita sobre as interfaces físicas ou virtuais do seu dia a dia. Com o conhecimento que você possui até aqui, indique uma interface que infrinja os fatores de usabilidade e explique porque.</p>
                </div>
                <hr>

                <!-- Curiosidade -->
                <div>
                    <p class="CuriosidadeTitulo"> Curiosidade</p>
                    <p class="CuriosidadeTexto">Veja na Figura 13 como o padrão Material Design, para construção de interfaces, organiza as cores utilizadas em aplicativos.</p>
                </div>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 13:</strong> O tema de cor do material de base</p>
                    <a href="imagens/figura13.png" data-toggle="lightbox" data-footer="O tema de cor do material de base">
                        <img class="img-fluid" src="imagens/figura13.png" alt="O tema de cor do material de base" width="600" height="400">
                    </a>
                    <p class="FonteFigura">Material Design.</p>
                </div>
                <hr>

                <br><br>

                <div class="text-center">
                    <a href="Topico02.3.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico03.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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