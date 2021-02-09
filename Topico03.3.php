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

                <h3 class="font-bold">3.3. Liberdade de controle fácil pro usuário</h3>
                <hr>

                <p class="Texto">
                    O usuário deve controlar o sistema e <strong>poder a qualquer momento abortar uma tarefa ou desfazer uma operação para retornar ao estado anterior</strong>. É necessário deixar sempre claro como é possível retornar a um estado anterior. Uma aplicação prática desta heurística, que é bastante comum no dia a dia de quem utiliza computadores, é o atalho Ctrl + z, que desfaz a última ação em sistemas. Veja o exemplo deste atalho na interface de um editor de texto na <strong>Figura 20</strong>.

                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 20:</strong> Atalho para desfazer uma ação</p>
                    <a href="imagens/figura20.png" data-toggle="lightbox" data-footer="Atalho para desfazer uma ação">
                        <img class="img-fluid" src="imagens/figura20.png" alt="Atalho para desfazer uma ação">
                    </a>
                    <p class="FonteFigura">Fonte: autor em Google Docs.</p>
                </div>
                <hr>

                <p class="Texto">
                    Um outro exemplo, menos comum, é o processo de apagar mensagens de aplicativos de conversas instantâneas, como Whatsapp (<strong>Figura 19</strong>). Há um conflito nessa questão, pois ao apagar a mensagem o aplicativo não dá visibilidade a outra pessoa do que foi inicialmente recebido. Então, na solução atual, o Whatsapp entrega uma informação de que aquela mensagem foi apagada. Outros sistemas de mensagem utilizam informes sobre mensagens que foram editadas, para que se mantenha a integridade da informação exposta
                </p>

                <p class="Texto">
                    Esse poder de retorno de uma ação cria confiabilidade no uso: é mais seguro saber que você pode apagar uma mensagem se enviar no grupo errado. Entretanto, é interessante refletir sobre o impacto dessa ação no processo no qual o sistema está envolvido.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 21:</strong> Apagar mensagem no Whatsapp</p>
                    <a href="imagens/figura21.png" data-toggle="lightbox" data-footer="Apagar mensagem no Whatsapp">
                        <img class="img-fluid" src="imagens/figura21.png" alt="Apagar mensagem no Whatsapp" width="500" height="500">
                    </a>
                    <p class="FonteFigura">Fonte: autor em aplicativo Whatsapp.</p>
                </div>
                <hr>

                <p class="Texto">
                    De acordo com Nielsen [8], quando uma ação é fácil de desfazer, isso fomenta um senso de liberdade e confiança com o sistema, dando controle a quem o utiliza.
                </p>

                <br><br>

                <div class="text-center">
                    <a href="Topico03.2.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico03.4.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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