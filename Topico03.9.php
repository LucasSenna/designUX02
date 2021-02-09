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

                <h3 class="font-bold">3.9. Ajude os usuários a reconhecerem, diagnosticarem e recuperarem-se de erros</h3>
                <hr>

                <p class="Texto">
                    As mensagens que interagem com usuários devem ser expressas em linguagem simples (sem utilização de códigos), indicando o problema e sugerindo uma solução [8]. É essencial <strong>ajudar o usuário a entender e resolver um erro do sistema</strong>. Para isto, a interface não deve culpá-lo ou intimidá-lo. Sobre as mensagens de erro, é importante que mensagens de erro:
                </p>

                <ul class="Texto pl-5">
                    <li>sejam <strong>claras e simples</strong> de serem entendidas e</li>
                    <li>ofereçam uma forma de se <strong>recuperar do erro</strong>.</li>
                </ul>

                <p class="Texto">
                    Além do texto, o visual do erro também deve ser bem apresentado e destacado. É comum utilizar a cor vermelha para indicar campos preenchidos de forma incorreta ou não preenchidos. Por este motivo, tenha atenção no uso do vermelho para componentes na sua interface, principalmente em mensagens de retorno de uma ação. Discutimos uma situação deste problema no sub-tópico <strong> <a href="Topico02.4.php" target="_blank">2.4. O que não é usual? </a>, Figura 10</strong>.
                </p>

                <p class="Texto">
                    É também importante que as mensagens de erro satisfaçam seus usuários, ou pelo menos não os assustem. A <strong>Figura 29</strong> apresenta um exemplo clássico de interface indevida para um vírus detectado. O modal era utilizado em uma versão antiga do software antivírus AVG. O problema, detecção de um vírus, está apresentado de forma clara e a solução mais rápida está no botão <em>Move to Vault</em>, que traduzido é mover para quarentena. Apesar de ter um valor sentimental daqueles que utilizaram computadores nas décadas de 90 e no início dos anos 2000, essa interface pode ser mais assustadora do que o necessário para um usuário despreparado. Não é justo julgar uma interface antiga com o que conhecemos e utilizamos hoje em usabilidade, mas ilustra bem como podemos apresentar melhor mensagens de erro. Medo é o sentimento ideal para resolver problemas?
                </p>


                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 29:</strong> Interface antiga de detecção do antivírus AVG
                    </p>
                    <a href="imagens/figura29.png" data-toggle="lightbox" data-footer="Interface antiga de detecção do antivírus AVG">
                        <img class="img-fluid" src="imagens/figura29.png" alt="Interface antiga de detecção do antivírus AVG">
                    </a>
                    <p class="FonteFigura">Fonte: Dribbble.</p>
                </div>

                <p class="Texto">
                    Apesar de estas instruções serem fundamentais, não é incomum ver mensagens que as infringem. O impacto disto pode ser enorme e irreversível. Don Norman, em seu famoso livro “O Design do Dia-a-dia” [13], afirma que seres humanos não erram sempre, mas erram com frequência quando as coisas que usam são mal concebidas e mal projetadas
                </p>

                <!-- Saiba Mais -->
                <div>
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <p class="SaibaMaisTexto">Projetar interfaces pode ser essencial para um uso sem erros. Para exemplificar isto, Norman apresentou resultados de uma análise sua em acidentes industriais [13]. No desastre que aconteceu na usina nuclear <em>Three Mile Island</em>, a culpa do acidente foi atribuída às pessoas que operavam a máquina e fizeram um diagnóstico errôneo do problema. Em sua análise, Norman verificou que na verdade houve uma série de problemas mecânicos que para correção deveriam verificar até luzes que indicavam o problema exato atrás do painel de controle, isto é, de difícil acesso. Ele então concluiu que “<strong>houve falha de equipamento combinada com grave erro de design</strong>”. Depois desse exemplo, parece justo lidar com o mea-culpa do design de sistemas?</p>
                </div>

                <p class="Texto">
                    Uma abordagem interessante para mensagens de erro, é torná-la mais amigável e interativa, diferente da que vimos na interface antiga do AVG (<strong>Figura 29</strong>). Veja o exemplo da página de erro 404 do Dribbble na <strong>Figura 30</strong> ou clicando no link:<a href="https://dribbble.com/shots/3429843--Reality" target="_blank"> mensagem de erro do Dribbble</a>.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 30:</strong> Erro 404 do Dribbble
                    </p>
                    <a href="imagens/figura30.jpg" data-toggle="lightbox" data-footer="Erro 404 do Dribbble">
                        <img class="img-fluid" src="imagens/figura30.jpg" alt="Erro 404 do Dribbble">
                    </a>
                    <p class="FonteFigura">Fonte: Dribbble.</p>
                </div>

                <!-- Curiosidade -->
                <div>
                    <p class="CuriosidadeTitulo"> Curiosidade</p>
                    <p class="CuriosidadeTexto">O erro 404 significa <em>Not Found</em>, em português “não encontrado”. Esta falha aparece quando a URL (link) pesquisada não foi encontrada no domínio buscado, o que também chamamos de link quebrado. Uma causa comum para esse erro é a digitação errada, mas também pode acontecer quando há links desatualizados nas páginas. Outros erros comuns em navegação são 400 - <em>Bad Request</em>, que indica problema na conexão; 401 - <em>Authorization Required</em> e 403 - <em>Forbidden</em>, que indicam problema de permissão de acesso.</p>
                </div>
                <hr>

                <br><br>

                <div class="text-center">
                    <a href="Topico03.8.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico03.10.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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