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
        <header class="container-header">
            <a href="{{ route('home') }}" class="img-link-header">
                <img src="{{ asset('imagens/diversas/logo_alusim1.png')}}" alt="Logo Alusim" class="logo-in-header" title="Logo Alusim">
            </a>
            <aside class="menu-aside">
                    <nav class="menu-nav-in-aside">
                        <div class="menu-item">
                            <a href="{{ route('home')}}" class="links-in-aside">Home</a>
                        </div>
                        <div class='menu-item'>
                            <a href="{{ route('servicos')}}" class="links-in-aside">Fotos</a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('about')}}" class="links-in-aside">Sobre nós</a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('contact')}}" class="links-in-aside">Contato</a>
                        </div>
                        <a href="" class="link-orcamento-header">Enviar mensagem</a>
                    </nav>
            </aside>
        </header>
        <main class="main">
            <div class="banner1">
                <img src="{{ asset('imagens/diversas/modelo-home.jpg') }}" alt="Imagem demonstrativa da página home" class="img-banner">
                <div class="texto-banner">
                    <h1>Esquadrias de alumínio sob medida</h1>
                    <p>Qualidade, durabilidade e acabamento profissional.</p>
                    <a href="" class="link-orcamento-banner">Solicitar orçamento</a>
                </div>
            </div>
            <div class="banner2">
                <div class="container-skill">
                    <img src="{{ asset('imagens/icones/precisao-ajustado.png')}}" alt="">
                    <h2>Sob medida</h2>
                    <p>Fabricação própria e sob medida</p>
                </div>
                <div class="container-skill">
                    <img src="{{ asset('imagens/icones/profissionais-ajustado.png')}}" alt="">
                    <h2>Instalação profissional</h2>
                </div>
                <div class="container-skill">
                    <img src="{{ asset('imagens/icones/acabamento-ajustado.png')}}" alt="">
                    <h2>Acabamento premium</h2>
                </div>
                <div class="container-skill">
                    <img src="{{asset('imagens/icones/experiancia-ajustado.png')}}" alt="">
                    <h2>Anos de experiência</h2>
                </div>
            </div>
        </main>
        <footer class="rodape">
            <h3>© 2025 copyright. Todos os direitos reservados.</h3>
        </footer>
    <script src="{{ asset('js/alert.js') }}"></script>
    </body>
</html>