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

                <h3 class="font-bold">2.3. Heurísticas de Nielsen</h3>
                <hr>

                <p class="Texto">
                    Além das normas apresentadas, existem outras especificações que se relacionam com a definição de Usabilidade. As heurísticas de Nielsen são mais didáticas para uma aplicação prática de usabilidade, sendo mais apreciadas e usadas no contexto de design de sistemas computacionais.
                </p>

                <p class="Texto">
                    Enquanto as normas buscam quantificar a usabilidade para definir qual o nível de conformidade com um modelo de qualidade, as heurísticas tratam a usabilidade de forma mais ampla e aberta, considerando aspectos da psicologia cognitiva e experimental [7]. As heurísticas não tem como objetivo encontrar um valor dentro de uma escala para a usabilidade. <strong>Esta é a melhor forma de trabalhar com usabilidade? Depende da aplicação</strong>. Conheça todas as definições e formatos para enfim decidir como irá utilizá-la no contexto de um determinado produto e seu processo. O foco deste curso será nas heurísticas de Nielsen.
                </p>

                <!-- Saiba Mais -->
                <div>
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <p class="SaibaMaisTexto">É importante ressaltar que as heurísticas de Nielsen não foram nem são as únicas a tratar da usabilidade. Como mostra o trabalho de Abreu (2005), há outros critérios ergonômicos de usabilidade:</p>
                    <p class="SaibaMaisTexto">
                        <ul class="pl-5">
                            <li>Ben Shneiderman (1986): “Oito regras de ouro do design de diálogo”</li>
                            <li>Donald Norman (1988): “Princípios de orientação”</li>
                            <li>Jakob Nielsen (1993): “Heurísticas de usabilidade”</li>
                            <li>Bruce Tognazzini (1987): “Guidelines de Interface humana”</li>
                            <li>Christien Bastien &, Dominique Scapin (1993): “Critérios ergonômicos para avaliação de interfaces humano-computador”</li>
                            <li>Andrew Monk (1992) - Nokia (Equipe Nokia)</li>
                        </ul>
                    </p>
                    <p class="SaibaMaisTexto">
                        Neste trabalho, Abreu apresenta um comparativo rico de 23 critérios, indicando, por exemplo, o quão semelhantes são as “oito regras de ouro” de Shneiderman com as heurísticas de usabilidade Nielsen. Esta lista permitiu a identificação de recomendações provenientes de pesquisas consolidadas em HCI culminando em 23 critérios ergonômicos de usabilidade para a avaliação de sistemas de telefones celulares [5].
                    </p>
                </div>
                <hr>

                <p class="Texto"> Para Nilsen, </p>

                <div class="container">
                    <div class="row">
                        <div class="col">
                        </div>
                        <div class="col-10 Texto">
                            <strong>A usabilidade é o atributo de qualidade que avalia se uma interface de usuário é fácil de usar. Usabilidade também se refere ao método utilizado para melhorar a facilidade de uso no processo de design</strong> [6].
                        </div>
                    </div>
                </div>
                <hr>

                <div>
                    <p class="Texto">
                        Nielsen complementa esta definição a partir de 5 fatores de usabilidade [6]:
                    </p>

                    Clique em cada fator para saber sua utilidade.
                    <br><br>

                    <ul class=" Texto pl-5">
                        <li><a tabindex="0" class="btn btn-lg btn-outline-success" role="button" data-toggle="popover" data-trigger="focus" data-placement="right" title="Quão fácil é para os usuários realizarem tarefas básicas na primeira vez que se deparam com o design da interface? De forma prática, este fator diz respeito ao tempo que o usuário leva para aprender a realizar as principais atividades ou um conjunto mais amplo de atividades do sistema."><strong>FACILIDADE DE APRENDIZADO <em>(Learnability)</em> </strong></a></li><br>

                        <li><a tabindex="0" class="btn btn-lg btn-outline-success" role="button" data-toggle="popover" data-trigger="focus" data-placement="right" title="Quando os usuários retornam ao sistema após um período sem usá-lo, com que facilidade eles podem restabelecer a proficiência de uso? Para avaliar este fator, é possível medir a porcentagem de tarefas que um usuário conseguiu lembrar ao usar uma aplicação que utiliza com baixa frequência."><strong>FACILIDADE DE RECORDAÇÃO <em>(Memorability)</em> </strong></a></li><br>

                        <li><a tabindex="0" class="btn btn-lg btn-outline-success" role="button" data-toggle="popover" data-trigger="focus" data-placement="right" title="Depois de aprender como interagir com uma interface, com que rapidez os usuários podem executar as tarefas? Sobre este fator, é possível medir o tempo gasto para completar uma tarefa e a porcentagem de completude da tarefa."><strong>EFICIÊNCIA <em>(Efficiency)</em> </strong></a></li><br>

                        <li><a tabindex="0" class="btn btn-lg btn-outline-success" role="button" data-toggle="popover" data-trigger="focus" data-placement="right" title=" Quantos erros os usuários cometem, quão graves são esses erros e com que facilidade eles podem se recuperar dos erros? Esse fator é bastante explorado nas avaliações que encontram problemas de usabilidade, onde é importante analisar se a interface auxilia o usuário a se recuperar de uma situação problemática."><strong>SEGURANÇA NO USO <em> (Errors)</em> </strong></a></li><br>


                        <li><a tabindex="0" class="btn btn-lg btn-outline-success" role="button" data-toggle="popover" data-trigger="focus" data-placement="right" title=" Q É prazeroso utilizar uma interface? A satisfação do usuário envolve prazer, diversão, entretenimento, interesse, motivação, estética, criatividade, surpresa e desafio."><strong>SATISFAÇÃO DO USUÁRIO <em> (Satisfaction)</em> </strong></a></li><br>
                    </ul>
                </div>
                <hr>

                <p class="Texto">
                    Além destas, Nielsen ressalta uma característica adicional à usabilidade: a <strong>utilidade</strong>, que se refere à funcionalidade em si e possibilita questionar <strong>o que o usuário realmente precisa</strong> [6]. Usabilidade e utilidade são igualmente importantes e, juntos, determinam se algo é útil, afinal <strong>pouco importa que algo seja fácil de usar se não for o que você deseja</strong>. Também não é bom que o sistema possa fazer o que você quer realizar em uma interface muito difícil de se utilizar. Veja um resumo disto na Figura 8.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 8:</strong> Utilidade e usabilidade</p>
                    <a href="imagens/figura08.png" data-toggle="lightbox" data-footer="Utilidade e usabilidade">
                        <img class="img-fluid wow fadeIn" src="imagens/figura08.png" alt="Utilidade e usabilidade">
                    </a>
                    <p class="FonteFigura">Fonte: autor com base em [8].</p>
                </div>
                <hr>

                <!-- Fique Atento -->
                <div>
                    <p class="FiqueAtentoTitulo pl-5"> Fique Atento</p>
                    <p class="FiqueAtentoTexto pl-5">Você já conseguiu repensar nas respostas que deu na atividade 1?</p>
                    <p class="FiqueAtentoTexto pl-5">As perguntas 5: “As aberturas propostas são fáceis de utilizar?”, 6: “Você se recordaria facilmente para que servem??” e 7: “Seria possível reconhecer para que servem sem ler a caixa ou o manual?” tratam dos fatores de usabilidade (1) Facilidade de aprendizado e (2) Facilidade de recordação.</p>
                </div>
                <hr>

                <p class="Texto">
                    Em 1994 Nielsen publicou as 10 heurísticas de usabilidade, ainda hoje bastante utilizadas [9][10]. As heurísticas de Nielsen, como são chamadas, são a base dos critérios de boas práticas de usabilidade. As heurísticas são utilizadas em vários momentos do processo de design. Junto com as heurísticas, Nielsen divulgou um método de inspeção de usabilidade que era barato, rápido e fácil de aplicar, que vamos explorar melhor na seção sobre avaliação.
                </p>

                <!-- Saiba Mais -->
                <div>
                    <p class="SaibaMaisTitulo pl-5">
                        Saiba Mais</p>
                    <p class="SaibaMaisTexto pl-5">De acordo com Nielsen, as heurísticas de usabilidade propostas por ele são 10 princípios gerais para o design. Elas são chamadas de "heurísticas" porque <strong>são regras genéricas e não diretrizes específicas de usabilidade</strong> [8].</p>
                </div>
                <hr>

                <p class="Texto">
                    Veja na <strong>Figura 9</strong> as 10 heurísticas de Nielsen de forma resumida. Na próxima seção iremos analisar cada uma das heurísticas.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 9:</strong> 10 heurísticas de Nielsen</p>
                    <a href="imagens/figura09.png" data-toggle="lightbox" data-footer="10 heurísticas de Nielsen">
                        <img class="img-fluid wow fadeIn" src="imagens/figura09.png" alt="10 heurísticas de Nielsen" width="860" height="860">
                    </a>
                    <p class="FonteFigura">Fonte: Medium.</p>
                </div>
                <hr>

                <br><br>

                <div class="text-center">
                    <a href="Topico02.2.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico02.4.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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