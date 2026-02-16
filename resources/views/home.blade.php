<!DOCTYPE html>
<html>
    <head>
        <title>Alusim</title>
        <meta name="description" content="Site de orçamentos para aberturas de aluminio ">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale="1.0">
        <link href="{{ asset('css/home.css') }}" rel="stylesheet"/>
    </head>
    <body>
    @if (session('success'))
        <div id="alert-success" class="alert-success">
            {{ session('success')}}
        </div>
    @endif

    @if ($errors->any())
        <div id="alert-error" class="alert-error">
            Ocorreu um erro ao enviar o formulário. Verifique os campos!
        </div>
    @endif
        <header class="header">
            <a href="{{ route('home') }}">
                <img src="{{ asset('imagens/logo/logo_alusim1.png')}}" alt="Logo Alusim" class="logo" title="Logo Alusim">
            </a>
            <aside class="aside">
                    <nav class="menu-nav">
                        <div class="menu-item">
                            <a href="{{ route('home')}}" class="links">Home</a>
                        </div>
                        <div class='menu-item'>
                            <a href="{{ route('servicos')}}" class="links">Fotos</a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('about')}}" class="links">Sobre nós</a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('contact')}}" class="links">Contato</a>
                        </div>
                    </nav>
            </aside>
        </header>
        <main class="">
        </main>
        <footer class="rodape">
            <h3>© 2025 copyright. Todos os direitos reservados.</h3>
        </footer>
    <script src="{{ asset('js/alert.js') }}"></script>
    </body>
</html>