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

                <h3 class="font-bold">4.2. Ajude os usuários a reconhecerem, diagnosticarem e recuperarem-se de erros</h3>
                <hr>

                <p class="Texto">
                    A avaliação heurística, também chamada de inspeção heurística, é um método de avaliação de IHC criado para encontrar problemas de usabilidade durante um processo interativo [7]. Foi proposto juntamente com as heurísticas de usabilidade de Nielsen com a finalidade de ser um <strong>método simples, rápido e de baixo custo</strong> [7]. Um menor rigor implica tanto em maior praticidade na aplicação, quanto na possibilidade de imprecisão do método. Por isso, deve ser realizado de forma estruturada e bem planejada.
                </p>

                <p class="Texto">
                    Esse método orienta os avaliadores a realizarem uma inspeção sistemática da interface seguindo atividades especificadas anteriormente. O avaliador realiza as atividades ao mesmo tempo que busca problemas de usabilidade baseados nas heurísticas.
                </p>

                <p class="Texto">
                    Para cada problema encontrado é comum estabelecer um nível de severidade que segue a Tabela 1. Além do grau de severidade, o problema pode conter descrição, sugestão de melhoria, local (tela) onde ocorreu e a atividade relacionada.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Tabela 1:</strong> Severidade de problemas de usabilidade
                    </p>
                    <a href="imagens/tabela1.png" data-toggle="lightbox" data-footer="Severidade de problemas de usabilidade">
                        <img class="img-fluid wow fadeIn" src="imagens/tabela1.png" alt="Severidade de problemas de usabilidade">
                    </a>
                </div>
                <hr>

                <p class="Texto">
                    Apesar de parecer óbvio, <strong>uma avaliação heurística encontra problemas</strong>. Por que é importante ressaltar isto? Porque nem sempre uma equipe ou um projeto está pronto para receber um conjunto de problemas. Se estes problemas não forem analisados e corrigidos, esta avaliação pode ter acontecido em vão. <strong>Dica: sempre que decidirem realizar uma avaliação de usabilidade ressaltem que encontrarão problemas e não elogios</strong> e apresentem a expectativa do que deve acontecer com essa lista de problemas. Isso também faz parte do planejamento. A comunicação é a chave do design.
                </p>

                <p class="Texto">
                    Uma avaliação heurística pode utilizar-se de outras heurísticas ou regras. É comum existirem conjuntos específicos para cada tipo de sistema, por exemplo, para aplicativos móveis ou sistemas de realidade virtual. Busque sempre um mais apropriado ao sistema ou se baseie nos mais genéricos.
                </p>

                <!-- Atividade -->
                <div>
                    <p class="AtividadeTitulo"> <br>Atividade 4</p>
                    <p class="AtividadeTexto">
                        Abra e copie (ou baixe) esta planilha de suporte à avaliação heurística:<a href="https://docs.google.com/spreadsheets/d/1ebC2JqwTi7q7uxejL7TuhDoqoUGFVGthjwAu7B979ts/edit?usp=sharing" target="_blank"> Avaliação Heurística</a>.
                    </p>
                    <p class="AtividadeTexto">
                        Realize uma avaliação heurística neste sistema:<a href="https://userinyerface.com/" target="_blank"> User Inyerface - A worst-practice UI experiment</a>. Este é um site onde uma empresa de tecnologia, Bagaar, criou um excelente exemplo de interface frustrante.
                    </p>
                </div>
                <hr>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 32:</strong> Interface frustrante da Bagaar
                    </p>
                    <a href="imagens/figura32.png" data-toggle="lightbox" data-footer="Interface frustrante da Bagaar">
                        <img class="img-fluid" src="imagens/figura32.png" alt="Interface frustrante da Bagaar">
                    </a>
                    <p class="FonteFigura">Fonte: Bagaar¹¹.</p>
                </div>

                <br><br>

                <div class="text-center">
                    <a href="Topico04.1.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Referencias.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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