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

                <h3 class="font-bold">3.2. Correspondência entre o sistema e o mundo real</h3>
                <hr>

                <p class="Texto">
                    A terminologia utilizada nas interfaces deve ser baseada na linguagem do usuário e não orientada ao sistema. As informações devem ser organizadas conforme o modelo mental do usuário. Isto na prática significa que devemos <strong>evitar termos técnicos ou termos específicos do negócio</strong> envolvido. Não somente os termos, mas os conceitos utilizados e os ícones devem ser familiares ao usuário.
                </p>

                <p class="Texto">
                    Suponha que você precisa criar uma interface que informa trajetos de ônibus exclusivo para sua cidade. Qual dos ícones da <strong>Figura 16</strong> você utilizaria? Se você mora em Fortaleza, que possui paradas como as da <strong>Figura 17</strong>, provavelmente escolheria a última opção, ou escolheria alguma das outras transformando a placa de redonda para quadrada.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 16:</strong> Ícones para parada de ônibus</p>
                    <a href="imagens/figura16.png" data-toggle="lightbox" data-footer="Ícones para parada de ônibus">
                        <img class="img-fluid" src="imagens/figura16.png" alt="Ícones para parada de ônibus">
                    </a>
                    <p class="FonteFigura">Fonte: Google.</p>
                </div>
                <hr><br>

                <div class="row">
                    <div class="col">
                        <div class="text-center">
                            <p class="TituloFigura"><strong>Figura 17:</strong> Paradas de ônibus em Fortaleza.</p>
                            <a href="imagens/Figura17.1.png" data-toggle="lightbox" data-footer="Paradas de ônibus em Fortaleza.">
                                <img class="img-fluid" src="imagens/Figura17.1.png" alt="Paradas de ônibus em Fortaleza.">
                            </a>
                            <p class="FonteFigura">Fonte: Diário do Nordeste</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <p class="TituloFigura"><strong>Figura 17:</strong>Paradas de ônibus em Fortaleza. </p>
                            <a href="imagens/Figura17.2.png" data-toggle="lightbox" data-footer="Paradas de ônibus em Fortaleza.">
                                <img class="img-fluid" src="imagens/Figura17.2.png" alt="Paradas de ônibus em Fortaleza.">
                            </a>
                            <p class="FonteFigura">Fonte: Portal G1
                            </p>
                        </div>
                    </div>
                </div>
                <hr>

                <p class="Texto">
                    Por que ter esse cuidado em carregar esse nível de realidade no ícone? <strong>Pelo modelo mental</strong> que temos dos objetos. Se você fez o curso “O que design ux?”, deve lembrar que modelo mental é a <strong>representação do processo de pensamento de alguém para saber como algo funciona</strong> (ou seja, a compreensão da pessoa sobre o mundo que a envolve). Então quanto mais próximo do modelo mental um elemento da interface é, mais fácil será de ser compreendida. De acordo com Nielsen [8], é mais fácil para os usuários aprenderem e lembrarem como a interface funciona quando há esse mapeamento entre os modelos e isso ajuda a construir uma experiência intuitiva.
                </p>

                <p class="Texto">
                    A <strong>Figura 18</strong> mostra outro exemplo em que a lixeira do Windows traz o modelo mental de forma bem próxima do que se espera de uma lixeira, mesmo que esta seja virtual e não precise ser um local8físico, como proposto no ícone.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 18:</strong> Ícone da lixeira no Windows</p>
                    <a href="imagens/figura18.png" data-toggle="lightbox" data-footer="Ícone da lixeira no Windows">
                        <img class="img-fluid" src="imagens/figura18.png" alt="Ícone da lixeira no Windows">
                    </a>
                    <p class="FonteFigura">Fonte: autor em Windows.</p>
                </div>
                <hr>

                <p class="Texto">
                    A <strong>Figura 19</strong> apresenta mais um exemplo, que vai fazer relembrar momentos passados àqueles que utilizaram computadores desde décadas passadas: uma interface antiga do Winamp, um aplicativo para ouvir músicas no computador bastante utilizado nos anos 2000. Nela vemos diversos botões que simulavam os botões dos rádios físicos da época, como o equalizador.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 19:</strong> Interface do Winamp</p>
                    <a href="imagens/figura19.png" data-toggle="lightbox" data-footer="Interface do Winamp">
                        <img class="img-fluid" src="imagens/figura19.png" alt="Interface do Winamp" width="650" height="650">
                    </a>
                    <p class="FonteFigura">Fonte: Techtudo.</p>
                </div>
                <hr>

                <!-- Curiosidade -->
                <div>
                    <p class="CuriosidadeTitulo"> Curiosidade</p>
                    <p class="CuriosidadeTexto">Se você tem memórias afetivas da interface do Winamp ou apenas quer conhecer a interface que citamos, acesse uma versão online do sistema em <a href="https://webamp.org" target="_blank">https://webamp.org/</a>. O aplicativo desktop foi descontinuado desde 2013.</p>
                </div>
                <hr>

                <p class="Texto">
                    Esta heurística também diz respeito à <strong>ordem</strong> em que os objetos são postos ou ocorrem. Informações devem aparecer em ordem cronológica e natural, de acordo com as convenções do mundo real. Essa regra tem que estar de acordo com a realidade da aplicação. É comum, por exemplo, listas de municípios de um estado estarem em ordem alfabética, porém a capital se apresenta antes de todas as outras cidades por ser a mais utilizada. <strong>Lembre-se: cada interação é única</strong>, nem sempre a ordem esperada é a alfabética.
                </p>

                <br><br>

                <div class="text-center">
                    <a href="Topico03.1.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico03.3.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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