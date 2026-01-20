<!DOCTYPE html>
<html>
    <head>
        <title>Alusim</title>
        <meta name="description" content="Site de orçamentos para aberturas de aluminio ">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale="1.0">
        <link href="{{ asset('css/servicos.css') }}" rel="stylesheet"/>
    </head>
    <body class="body">
        <header class="header">
            <a href="{{ route('home') }}">
                <img src="{{ asset('imagens/logo/logo_alusim1.png') }}" alt="Logo Alusim" class="logo" title="Logo Alusim">
            </a>
            <aside class="aside">
                    <nav class="menu-nav">
                        <div class="menu-item">
                            <a href="{{ route('home') }}" class="links">Home</a>
                        </div>
                        <div class='menu-item'>
                            <a href="{{ route('servicos') }}" class="links">Fotos</a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('about') }}" class="links">Sobre nós</a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('contact') }}" class="links">Contato</a>
                        </div>
                    </nav>
            </aside>
        </header>
        <main class="corpo">
            <section class="janela-correr">
                <h2>Janelas de correr</h2>
                <div class="carrossel">
                    <figure class="figure">
                        <img src="/meu-site/imagens/aberturas/janelas-de-correr/janela-2f-grade.jpg" alt="Janela de correr 2 folhas c/grade" class="imagens">
                        <h3>Janela de correr 2 folhas com grade</h3>
                    </figure> 
                    <figure class="figure">
                        <img src="/meu-site/imagens/aberturas/janelas-de-correr/janela-2f-grade-2.jpg" alt="Janela de correr 2 folhas c/grade - 2" class="imagens">
                        <h3>Janela de correr 2 folhas com grade</h3>
                    </figure>
                    <figure class="figure">
                        <img src="/meu-site/imagens/aberturas/janelas-de-correr/janela-2f-grade-3.jpg" alt="Janela de correr 2 folhas c/grade - 3" class="imagens">
                        <h3>Janela de correr 2 folhas com grade</h3>
                    </figure>
                    <figure class="figure">
                        <img src="/meu-site/imagens/aberturas/janelas-de-correr/janela-2f-grade-4.jpg" alt="Janela de correr 2 folhas c/grade - 4" class="imagens">
                        <h3>Janela de correr 2 folhas com grade</h3>
                    </figure>
                       <figure class="figure">
                        <img src="/meu-site/imagens/aberturas/janelas-de-correr/janela-4f.jpg" alt="Janela de correr 4 folhas" class="imagens">
                        <h3>Janela de correr 4 folhas</h3>
                    </figure>
                    <figure class="figure">
                        <img src="/meu-site/imagens/aberturas/janelas-de-correr/janela-vd-temp-fume.jpg" alt="Janela de correr vidro temperado" class="imagens">
                        <h3>Janela de correr em vidro temperado</h3>                        </figure>
                </div>
            </section>
            <section>
                <h2>Portas Janelas</h2>
                <div>
                    <div class="carrossel">
                        <figure>
                            <img src="/meu-site/imagens/aberturas/portas-janela/correr-2f.jpg" alt="Porta janela de correr 2 folhas" class="imagens">
                        </figure>
                    </div>
                </div>
            </section>
        </main>
        <footer class="rodape">
            <h3>© 2025 copyright. Todos os direitos reservados.</h3>
        </footer>
    </body>
</html>