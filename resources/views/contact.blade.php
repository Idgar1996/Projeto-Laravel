<!DOCTYPE html>
<html>
    <head>
        <title>Alusim</title>
        <meta name="description" content="Site de orçamentos para aberturas de aluminio ">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale="1.0">
        @vite(['resources/css/app.css', 'resources/css/contact.css','resources/js/app.js'])
    </head>
    <body class="body">
        <header class="container-header">
            <a href="{{ route('home') }}" class="img-link-header">
                <img src="{{ Vite::asset('resources/assets/img/logos/logo_alusim1.webp')}}" alt="Logo Alusim" class="logo-in-header" title="Logo Alusim">
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
                        <a href="{{ route('mensagem')}}" class="link-orcamento">Enviar mensagem</a>
                    </nav>
            </aside>
        </header>
        <main class="main">
            <section class="container">
                <h1>Entre em contato conosco</h1>
                <h2>Para entrar em contato conosco, acesse os links abaixo para nos enviar uma mensagem, ou se preferir, confira a nossa localização para nos visitar pessoalmente.</h2>
                <section class="container-contatos">
                    <div class="card-contato">
                        <img src="{{ Vite::asset('resources/assets/img/icones/icone-fone.webp') }}" alt="icone telefone" class="">
                        <div class="text-card">
                            <h2>Telefone:</h2>
                            <a href="https://wa.me/5551995944991" target="_blank" class="link">(51) 99594-4991</a>
                        </div>
                    </div>
                    <div class="card-contato">
                        <img src="{{ Vite::asset('resources/assets/img/icones/icone-email.webp') }}" alt="icone e-mail" class="">
                        <div class="text-card">
                            <h2>E-mail:</h2>
                            <a href="mailto:alusimesquadrias@gmail.com" target="_blank" class="link">alusimesquadrias@gmail.com</a>
                        </div>
                    </div>
                    <div  class="card-contato">
                        <img src="{{ Vite::asset('resources/assets/img/icones/icone-location.webp') }}" alt="icone localização" class="">
                        <div class="text-card">
                            <h2>Localização</h2>
                            <a href="https://www.google.com/maps/place/Alusim+Esquadrias/@-29.4987323,-51.3538944,17.6z/data=!4m6!3m5!1s0x951bfff8fdbbc1f7:0x344e646a0ed3b3c1!8m2!3d-29.4986158!4d-51.3544233!16s%2Fg%2F11c2l13pcm?entry=ttu&g_ep=EgoyMDI1MTIwMi4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="link">Rua Irmão Weibert, 144 - Centro - Bom Princípio -RS</a>
                        </div>
                    </div>
                </section>
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