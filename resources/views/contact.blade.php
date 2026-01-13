<!DOCTYPE html>
<html>
    <head>
        <title>Alusim</title>
        <meta name="description" content="Site de orçamentos para aberturas de aluminio ">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale="1.0">
        <link href="{{ asset('css/contact.css') }}" rel="stylesheet"/>
        <base href="https://localhost/meu-site/">
    </head>
    <body class="corpo">
        <header class="header">
            <a href="/index.php">
                <img src="{{ asset('imagens/logo/logo_alusim1.png') }}" alt="Logo Alusim" class="logo" title="Logo Alusim">
            </a> 
            <aside class="aside">
                    <nav class="menu-nav">
                        <div class="menu-item">
                            <a href="/meu-site/php/index.php" class="links">Home</a>
                        </div>
                        <div class='menu-item'>
                            <a href="/meu-site/php/servicos.php" class="links">Fotos</a>
                        </div>
                        <div class="menu-item">
                            <a href="/meu-site/php/about_us.php" class="links">Sobre nós</a>
                        </div>
                        <div class="menu-item">
                            <a href="/meu-site/php/contact.php" class="links">Contato</a>
                        </div>
                    </nav>
            </aside>
        </header>
        <main class="main">
            <section class="contatos">
                <div class="nossos-contatos">
                    <div class="info-box">
                        <div>
                            <img src="{{ asset('imagens/icones/icone-fone.png') }}" alt="icone telefone" class="icones">
                        </div>
                        <div>
                            <h2>Telefone:</h2>
                            <a href="https://wa.me/5551995944991" target="_blank" class="link">(51) 99594-4991</a>
                        </div>
                    </div>
                    <div class="info-box">
                        <div>
                            <img src="{{ asset('imagens/icones/icone-email.png') }}" alt="icone e-mail" class="icones">
                        </div>
                        <div class="">
                            <h2>E-mail:</h2>
                            <a href="mailto:alusimesquadrias@gmail.com" target="_blank" class="link">alusimesquadrias@gmail.com</a>
                        </div>
                    </div>
                    <div  class="info-box">
                        <div>
                            <img src="{{ asset('imagens/icones/icone-location.png') }}" alt="icone localização" class="icones">
                        </div>
                        <div>
                            <h2>Localização</h2>
                            <a href="https://www.google.com/maps/place/Alusim+Esquadrias/@-29.4987323,-51.3538944,17.6z/data=!4m6!3m5!1s0x951bfff8fdbbc1f7:0x344e646a0ed3b3c1!8m2!3d-29.4986158!4d-51.3544233!16s%2Fg%2F11c2l13pcm?entry=ttu&g_ep=EgoyMDI1MTIwMi4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="link">Rua Irmão Weibert, 144 - Centro - Bom Princípio -RS</a>
                        </div>
                    </div>
                </div>
                <div class="mensagem">
                    <div class="text-msg">
                        <h2>Ou se preferir...</h2>
                        <p>Clique no no botão abaixo e será direcionado a página de mensagem, onde você poderá descrever com detalhes suas necessidades e desejos</p>
                    </div>
                    <a href="/meu-site/php/mensagem.php" class="links">Mensagem</a>
                </div>
            </section>
        </main>
        <footer class="rodape">
            <h3>© 2025 copyright. Todos os direitos reservados.</h3>
        </footer>
    </body>
</html>