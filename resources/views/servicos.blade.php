<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Alusim</title>
        <meta name="description" content="Site de orçamentos para aberturas de aluminio ">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale="1.0">
        @vite(['resources/css/app.css','resources/css/servicos.css', 'resources/js/app.js'])
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
                            <a href="" class="link-orcamento">Enviar mensagem</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main class="main">
            <section class="container-servicos">
                <h1>Nossos Serviços</h1>
                <h2>Alguns trabalhos realizados pela Alusim.</h2>
                <div class="container-imagens">
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/JC.webp') }}" alt="Imagem de teste">
                        <h3>Janela de correr</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/PC.webp') }}" alt="Imagem de teste">
                        <h3>Porta janela</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/PG.webp') }}" alt="Imagem de teste">
                        <h3>Porta de giro</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/PP.webp') }}" alt="Imagem de teste">
                        <h3>Porta pivotante</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/MA.webp') }}" alt="Imagem de teste">
                        <h3>Janela maxim-ar</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/PS.webp') }}" alt="Imagem de teste">
                        <h3>Persiana</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/VZ.webp') }}" alt="Imagem de teste">
                        <h3>Sanfonada</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/PT.webp') }}" alt="Imagem de teste">
                        <h3>Portão</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/GC.webp') }}" alt="Imagem de teste">
                        <h3>Guarda corpo</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/FC.webp') }}" alt="Imagem de teste">
                        <h3>Fachada</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/PL.webp') }}" alt="Imagem de teste">
                        <h3>Pergolado</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/CR.webp') }}" alt="Imagem de teste">
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