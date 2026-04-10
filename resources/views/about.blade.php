<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Alusim</title>
        <meta name="description" content="Site de orçamentos para aberturas de aluminio ">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale="1.0">
        @vite(['resources/css/app.css','resources/css/about.css', 'resources/js/app.js'])
    </head>
    <body class="body">
        <header class="container-header">
            <a href="{{ route('home') }}" class="img-link-header">
                <img src="{{ Vite::asset('resources/assets/img/logos/logo_alusim1.webp')}}" alt="Logo Alusim" class="logo-in-header" title="Logo Alusim">
            </a>
            <nav class="menu-aside">
                <div class="hamburguer-container">
                    <div class="icone-hamburguer">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <ul class="menu-nav-in-aside">
                        <li>
                            <a href="{{ route('home')}}" class="links-in-aside">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('servicos')}}" class="links-in-aside">Fotos</a>
                        </li>
                        <li>
                            <a href="{{ route('about')}}" class="links-in-aside">Sobre nós</a>
                        </li>
                        <li>
                            <a href="{{ route('contact')}}" class="links-in-aside">Contato</a>
                        </li>
                        <li>
                            <a href="{{ route('mensagem')}}" class="link-orcamento">Enviar mensagem</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main class="main">
            <section class="container-about">
                <div class="container-text">
                    <h2 title="Apresentação" class=""> Bem vindos ao nosso site de orçamentos para aberturas de alumínio!</h2>
                    <p id="">Bem-vindo ao equilíbrio perfeito entre <b>estilo e custo-benefício</b>. Sua abertura de alumínio personalizada, combinando beleza, funcionalidade e um valor que surpreende. Transforme sua casa com a leveza e durabilidade do alumínio. Criamos aberturas sob medida, que refletem seu estilo e se adaptam ao seu projeto. <b><i>E o melhor</i></b>: uma solução exclusiva que valoriza seu espaço e cabe no seu orçamento.</p>
                </div>
                <img src="{{ Vite::asset('resources/assets/img/sobre-nos/bem-vindo.webp') }}" alt="Imagem de Boas Vindas" class="">
            </section>
            <section class="container-about">
                <div class="container-text">
                    <h2 title="historia" class="">Nossa história</h2>
                    <p>A história da Alusim começa muito antes da abertura de nossa primeira fábrica; ela começa com um entendimento profundo do que significa transformar matéria-prima em qualidade e confiança. Fundada em Bom Princípio, uma região reconhecida nacionalmente como um polo de excelência em fabricação e design, nossa empresa nasceu já imersa em uma cultura de trabalho árduo, precisão e capricho.</p>
                    <p>Desde início, somos uma empresa dedicada, onde o conhecimento técnico se une ao cuidado artesanal. Acreditávamos, e ainda acreditamos, que uma esquadria de alumínio vai muito além de uma simples abertura em uma parede. Ela é a moldura que resignifica a sua vista, a entrada de luz que transforma um ambiente, e o elemento que une o interior ao exterior com elegância e segurança.</p>
                </div>
                <img src="{{ Vite::asset('resources/assets/img/sobre-nos/nossa-fabrica.webp') }}" alt="Nossa Fábrica" class="">
            </section>
            <section class="container-about">
                <div class="container-text">    
                    <h2 title="Sobre nós" class=""> Alusim: Precisão em Esquadrias de Alumínio</h2>
                    <p id="">Nossa trajetória nasceu de uma premissa simples, porém poderosa: o amor genuíno pelo trabalho com esquadrias. Antes mesmo de surgirmos como Alusim, já acumulávamos vasta experiência no segmento por meio da Futurarte, onde atuávamos com excelência na produção de aberturas em madeira. 
                    Esse histórico nos permitiu desenvolver um olhar técnico, sensível e altamente qualificado para tudo o que envolve projetos arquitetônicos.
                    <p>Com o passar dos anos, percebemos um movimento claro no mercado: clientes buscando soluções mais modernas, duráveis e alinhadas às novas tendências construtivas. Esse cenário despertou em nós uma visão estratégica — a oportunidade de evoluir, expandir horizontes e elevar nosso padrão de entrega.
                    Foi então que, em 2013, tomamos uma decisão que redefiniria nosso futuro: trazer para o nosso portfólio o alumínio como protagonista. Assim nasceu oficialmente a Alusim, fruto da união entre experiência, inovação e um compromisso inegociável com qualidade.</p>
                    <p>Ao incorporar o alumínio às nossas operações, agregamos durabilidade, versatilidade, design contemporâneo e um novo conceito de sofisticação para nossos clientes. Essa mudança não representou apenas a ampliação de produtos: simbolizou um salto de modernidade e profissionalização, consolidando uma marca preparada para atender projetos cada vez mais exigentes.</p>
                    <p>Hoje, seguimos firmes no propósito que nos trouxe até aqui: entregar soluções inteligentes, seguras e alinhadas ao que há de mais atual no setor de esquadrias — sempre guiados pela paixão que nos move desde o primeiro dia.</p>
                </div>
                <img src="{{ Vite::asset('resources/assets/img/sobre-nos/equipe.webp') }}" alt="Equipe" class="">
            </section>
        </main>
        <footer class="footer">
            <img src="{{ Vite::asset('resources/assets/img/logos/logo_branco.webp') }}" alt="Logo branco Alusim">
            <h2>Esquadrias de alumínio sob medida com qualidade e precisão.</h2>
            <div class="painel-infos">
                <h3>Alusim Esquadrias LTDA</h3>
                <p>(51) 99594-4991</p>
                <p>Rua Irmão Weibert, 144, Centro - Bom Princípio</p>
            </div>
        </footer>
    </body>
</html>