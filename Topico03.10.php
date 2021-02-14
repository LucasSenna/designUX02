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

                <h3 class="font-bold">3.10. Ajuda e documentação</h3>
                <hr>

                <p class="Texto">
                    O ideal é que o sistema não precise de documentação extra para que seja utilizado [8]. Usabilidade em sua essência é justamente a interface ser auto-explicável. <strong>Quando necessário, porém, é importante que este conteúdo seja também fácil de usar e entender</strong>. Além disso, deve ser fácil de ser encontrado e se for longo deve ser fácil de pesquisar algo dentro dele
                </p>

                <p class="Texto">
                    O título desta heurística lembra longos documentos de instruções, como bulas de remédios ou os antigos manuais de instruções que recebíamos com uma TV nova. Entretanto, vale lembrar que esta heurística não diz respeito a todo tipo de documentação de software. Ela trata de <strong>informações de ajuda na interação com usuário</strong>, que devem ser concisas e diretas. Não há espaço nessa comunicação para informações extras ou complexas, como uma documentação técnica da equipe de desenvolvimento.
                </p>

                <p class="Texto">
                    <strong>A forma de aplicação contextual é considerada pelos especialistas como a forma mais apropriada</strong> [8]. Esse formato acontece quando a informação de ajuda para uma atividade aparece no momento desta atividade e não fica em um local separado, como em uma tela de ajuda. Veja na <strong>Figura 31</strong> um exemplo prático de ajuda contextual. No exemplo vemos um modal de ajuda que explica sobre um campo específico da adição do cartão de crédito. Essa informação é contextual pois se encontra no local onde o próprio cartão está adicionado, como pode ser visto na tela de fundo. Desta forma não é necessário sair desta tela e parar a atividade para tirar uma dúvida.
                </p>
                
                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 31:</strong> Exemplo de ajuda contextual no iFoodn</p>
                    <a href="imagens/figura31.jpg" data-toggle="lightbox" data-footer="10 heurísticas de Nielsen">
                        <img class="img-fluid wow fadeIn" src="imagens/figura09.png" alt="10 heurísticas de Nielsen" width="860" height="860">
                    </a>
                    <p class="FonteFigura">Fonte: Ifood.</p>
                </div>
                <hr>

                <!-- Atividade -->
                <div>
                    <p class="AtividadeTitulo"> <br>Atividade 3</p>
                    <p class="AtividadeTexto">Abra o último aplicativo ou sistema que utilizou e busque 5 pontos positivos ou negativos da interface deste aplicativo conforme as heurísticas apresentadas. Encontre as heurísticas nestas interfaces.</p>

                    <p class="AtividadeTexto">Dica: se você está usando o computador, pode abrir a última página fechada no navegador usando o atalho <em>Ctrl + Shit + t</em>.</p>
                </div>
                <hr>

                <!-- Saiba Mais -->
                <div>
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <p class="SaibaMaisTexto">Para fixar as heurísticas, assista a lista de vídeos do NNGroup sobre as 10 heurísticas de usabilidade:<a href="https://www.youtube.com/playlist?list=PLJOFJ3Ok_idtb2YeifXlG1-TYoMBLoG6I" target="_blank"> The 10 Usability Heuristics</a>. Como Nielsen, que estabeleceu as heurísticas de usabilidade, faz parte do grupo, esta é considerada uma fonte de conteúdo relevante e que está sendo atualizada.</p>
                </div>
                <hr>

                <br><br>

                <div class="text-center">
                    <a href="Topico03.9.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico04.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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