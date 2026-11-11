<!DOCTYPE html> 
<html lang="pt-br">
    <head>
        <title>@yield('title','Alusim')</title>
        <meta name="description" content="Site de orçamentos para aberturas de aluminio ">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @yield('styles')
    </head>
    <body>
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

        <!-- Conteúdo dinâmico da página -->

        <main>
            @yield('content')
        </main>

        <!-- Rodapé -->

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