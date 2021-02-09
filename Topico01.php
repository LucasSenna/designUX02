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

                <h2 class="font-bold">1. Apresentação</h2>
                <hr>

                <p class="Texto">
                    Antes de iniciar este curso, é recomendado que veja o curso “O que design ux?”, onde são apresentados os conceitos fundamentais de design UX. Ao longo deste material vamos utilizar o termo “design UX”, que é comumente utilizado em tecnologia da informação. UX é um acrônimo do termo inglês <em>User eXperience</em>, que em português é <strong>experiência do usuário</strong>.
                </p>

                <div>
                    <p class="ImportanteTitulo"> IMPORTANTE </p>
                    <P class="ImportanteTexto"> Este é um curso introdutório, onde vamos passar por conteúdos que podem ser apresentados de forma extensa, mas não é este o nosso objetivo aqui. Então vamos conhecer o que é fundamental para você entender usabilidade na área de tecnologia ou em outros âmbitos da vida.</p>
                </div>
                <hr>

                <p class="Texto">
                    Usabilidade deixou de ser um termo próprio do mundo do design de sistemas. Hoje é possível encontrá-lo escrito em caixas de produtos, como na <strong>Figura 1</strong>. Neste exemplo, o produto é um óculos 3D para realidade virtual ou aumentada da marca WARRIOR. O trecho apresentado na caixa em que considera-se usabilidade é: “<em>Aberturas laterais para utilizar fone de ouvido e carregador durante o uso</em>”, como você pode ler na Figura 1.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 1:</strong> Caixa de óculos 3D</p>
                    <a href="imagens/figura01.png" data-toggle="lightbox" data-footer="Caixa de óculos 3D">
                        <img class="img-fluid" src="imagens/figura01.png" alt="Caixa de óculos 3D">
                    </a>
                    <p class="FonteFigura">Fonte: autor</p>
                </div>
                <hr>


                <div>
                    <p class="CuriosidadeTitulo"> Curiosidade</p>
                    <p class="CuriosidadeTexto">Esse tipo de óculos de realidade virtual se utiliza de um smartphone acoplado para gerar as imagens, já que ele próprio não possui telas, somente lentes. Na <strong>Figura 2</strong> é possível ver a estrutura de acoplamento do dispositivo e as lentes que geram a sensação 3D. Esse formato de óculos é comum no mercado, pois há uma redução de custo e um aproveitamento dos dispositivos móveis, que possuem uma alta capacidade computacional. O design é semelhante a outros óculos, por este motivo deve haver uma busca para que as marcas melhorem questões relacionadas à qualidade do dispositivo. <br>
                        Você já utilizou óculos de realidade virtual? Existem versões no mercado que são feitas de papelão e tem custos muito acessíveis, são os cardboards da Google .
                    </p>
                </div>
                <hr>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 2:</strong> Caixa de óculos 3D</p>
                    <a href="imagens/figura02.png" data-toggle="lightbox" data-footer="Óculos 3D">
                        <img class="img-fluid" src="imagens/figura02.png" alt="Óculos 3D">
                    </a>
                    <p class="FonteFigura">Fonte: Google</p>
                </div>
                <hr>

                <p class="Texto">
                    A frase sobre usabilidade é curta a ponto de não entendermos qual a relação dela com a essência do termo. O objetivo já é mais claro, a usabilidade como é apresentada é considerada como uma vantagem do produto. Antes mesmo de conhecermos mais sobre usabilidade, é possível se perguntar sobre alguns pontos:
                </p>

                <p class="Texto pl-5">
                    <strong>1</strong>. Quem decidiu agregar conceitos de usabilidade ao dispositivo?<br>
                    <strong>2</strong>. Qual metodologia que envolve usabilidade foi utilizada para chegar na escolha desse comportamento?<br>
                    <strong>3</strong>. Com que nível de certeza é possível afirmar que esse é um comportamento ideal para seus usuários?<br>
                    <strong>4</strong>. Por que adicionar uma característica que trará uma limitação física de uso do dispositivo pode melhorar a usabilidade? Já que ao conectar a um carregador o usuário terá uma movimentação limitada.<br>
                    <strong>5</strong>. As aberturas propostas são fáceis de utilizar?<br>
                    <strong>6</strong>. Você se recordaria facilmente para que servem?<br>
                    <strong>7</strong>. Seria possível reconhecer para que servem sem ler a caixa ou o manual?
                </p>
                <hr>

                <!-- Atividade -->
                <div>
                    <p class="AtividadeTitulo"> <br>Atividade 1</p>
                    <p class="AtividadeTexto">Responda cada uma destas perguntas com seu conhecimento atual no dispositivo e em experiência do usuário. Se necessário veja vídeos de uso do dispositivo no YouTube (dica: busque pelos termos “review” e “óculos 3D WARRIOR”). Guarde essas respostas para compararmos com a teoria ao longo do curso. </p>
                </div>
                <hr>

                <p class="Texto">
                    Não vamos antecipar aqui definições formais de usabilidade, mas vamos trazer ao longo deste material as respostas para cada uma destas perguntas. Existem diversas características de qualidade que podemos aplicar aos sistemas e dispositivos. A decisão de acrescentar um nível de qualidade em alguma destas características pode ter impacto em como esse sistema ou dispositivo é aceito pelos seus usuários e pelo mercado. Vamos à teoria?
                </p>

                <br><br>

                <div class="text-center">
                    <a href="Topico02.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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

</html>