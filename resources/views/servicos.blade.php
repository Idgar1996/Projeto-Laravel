<!DOCTYPE html>
<html>
    <head>
        <title>Alusim</title>
        <meta name="description" content="Site de orçamentos para aberturas de aluminio ">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale="1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="body">
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
                        <a href="" class="link-orcamento">Enviar mensagem</a>
                    </nav>
            </aside>
        </header>
        <main class="main">
            <section class="container-servicos">
                <h1>Nossos Serviços</h1>
                <h2>Alguns trabalhos realizados pela Alusim.</h2>
                <div class="container-imagens">
                    <div class="card-servico">
                        <img src="{{ route('imagem.show', 'JC') }}" alt="Imagem de teste">
                        <h3>Janela de correr</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ route('imagem.show', 'PC') }}" alt="Imagem de teste">
                        <h3>Porta janela</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ route('imagem.show', 'PG') }}" alt="Imagem de teste">
                        <h3>Porta de giro</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ route('imagem.show', 'PP') }}" alt="Imagem de teste">
                        <h3>Porta pivotante</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ route('imagem.show', 'MA') }}" alt="Imagem de teste">
                        <h3>Janela maxim-ar</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ route('imagem.show', 'PS') }}" alt="Imagem de teste">
                        <h3>Persiana</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ route('imagem.show', 'VZ') }}" alt="Imagem de teste">
                        <h3>Sanfonada</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ route('imagem.show', 'PT') }}" alt="Imagem de teste">
                        <h3>Portão</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ route('imagem.show', 'GC') }}" alt="Imagem de teste">
                        <h3>Guarda corpo</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ route('imagem.show', 'FC') }}" alt="Imagem de teste">
                        <h3>Fachada</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ route('imagem.show', 'PL') }}" alt="Imagem de teste">
                        <h3>Pergolado</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ route('imagem.show', 'CR') }}" alt="Imagem de teste">
                        <h3>Corrimão</h3>
                    </div>
                </div>
                <div class="card-go-message">
                    <div class="container-texto">
                        <h3>Precisando de esquadrias <br> para a sua obra?</h3>
                        <p>Entre em contato e solicite um orçamento sem compromisso.</p>
                    </div>
                    <a href="{{ route('mensagem') }}" class="link-bottom">Solicitar orçamento</a>
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
    </body>
</html>