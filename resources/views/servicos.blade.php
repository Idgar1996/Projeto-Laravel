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
        </main>
        <footer class="rodape">
            <h3>© 2025 copyright. Todos os direitos reservados.</h3>
        </footer>
    </body>
</html>