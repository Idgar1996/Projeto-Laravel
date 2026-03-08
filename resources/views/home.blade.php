<!DOCTYPE html> 
<html>
    <head>
        <title>Alusim</title>
        <meta name="description" content="Site de orçamentos para aberturas de aluminio ">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <section class="banner1">
                <img src="{{ asset('imagens/diversas/modelo-home.jpg') }}" alt="Imagem de apresentação com porta janela de correr sanfonada." class="img-banner">
                <div class="texto-banner">
                    <h1>Esquadrias de alumínio sob medida</h1>
                    <p>Qualidade, durabilidade e acabamento profissional.</p>
                    <a href="" class="link-orcamento-banner">Solicitar orçamento</a>
                </div>
            </section>
            <section class="banner2">
                <div class="container-skill">
                    <img src="{{ asset('imagens/icones/precisao-ajustado.png')}}" alt="Icone 'Sob medida'">
                    <h2>Sob medida</h2>
                    <p>Fabricação própria e sob medida</p>
                </div>
                <div class="container-skill">
                    <img src="{{ asset('imagens/icones/profissionais-ajustado.png')}}" alt="Icone 'Instalação profissional'">
                    <h2>Instalação profissional</h2>
                </div>
                <div class="container-skill">
                    <img src="{{ asset('imagens/icones/acabamento-ajustado.png')}}" alt="Icone 'Acabamento premium'">
                    <h2>Acabamento premium</h2>
                </div>
                <div class="container-skill">
                    <img src="{{asset('imagens/icones/experiancia-ajustado.png')}}" alt="Icone 'Anos de experiência'">
                    <h2>Anos de experiência</h2>
                </div>
            </section>
            <section class="banner3">
                <h1>Serviços</h1>
                <div class="container-servicos">
                    <div class="card-servico">
                        <img src="{{ asset('/imagens/img-home/jc4f.png') }}" alt="Imagem de janela de correr 4 folhas">
                        <h2>Janelas de correr</h2>
                        <p>Janelas de correr com diversas opções de cores, folhas e modelos.</p>
                    </div>
                    <div class="card-servico">
                        <img src="{{ asset('/imagens/img-home/pj3f.png') }}" alt="Imagem de porta de correr 3 folhas sequencial">
                        <h2>Porta janela de correr</h2>
                        <p>Porta janela dos mais diversos modelos e tamanhos.</p>
                    </div>
                    <div class="card-servico">
                        <img src="{{ asset('/imagens/img-home/fachada.png') }}" alt="Imagem de uma fachada">
                        <h2>Fachada</h2>
                        <p>Fachadas trazem sofisticação e  estilo para sua obra.</p>
                    </div>
                    <div class="card-servico">
                        <img src="{{ asset('/imagens/img-home/mx.png') }}" alt="Imagem de uma maxim-ar">
                        <h2>Maxim-ar</h2>
                        <p>Janelas para banheiro e áreas de serviço, trazendo praticidade e segurança.</p>
                    </div>
                    <div class="card-servico">
                        <img src="{{ asset('/imagens/img-home/portao.png') }}" alt="Imagem de um portão">
                        <h2>Portões</h2>
                        <p>Os mais diversos modelos de portões, do basculante ao de correr.</p>
                    </div>
                    <div class="card-servico">
                        <img src="{{ asset('/imagens/img-home/gp.png') }}" alt="Imagem de uma guarda corpo de vidro temperado">
                        <h2>Guarda corpo</h2>
                        <p>Além de segurança, os guarda corpos possuem relevância quando se fala em estética residencial.</p>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer">
            <img src="{{ asset('/imagens/diversas/logo_branco.png') }}" alt="Logo branco Alusim">
            <h2>Esquadrias de alumínio sob medida com qualidade e precisão.</h2>
            <div class="painel-infos">
                <h3>Alusim Esquadrias LTDA</h3>
                <p>(51) 99594-4991</p>
                <p>Rua Irmão Weibert, 144, Centro - Bom Princípio</p>
            </div>
        </footer>
    <script src="{{ asset('js/alert.js') }}"></script>
    </body>
</html>