<!DOCTYPE html>
<html>
    <head>
        <title>Alusim</title>
        <meta name="description" content="Site de orçamentos para aberturas de aluminio ">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale="1.0">
        <link href="{{ asset('css/contact.css')}}" rel="stylesheet"/>
    </head>
    <body class="corpo">
        @if(session('success'))
        <div id="successAlert" style="
            position: fixed;
            top: 40%;
            left: 50%;
            transform: translateX(-50%);
            background-color: #0f5132;
            font-size: 26px;
            color: white;
            padding: 15px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            z-index: 9999;
            max-width: 500px;
            width: 400px;
            heigth: 40px;
            text-align: center;
            animation: slideIn 0.3s ease;">

            <div style="
                display: flex; 
                justify-content: space-between; 
                align-items: start;">
                <div style="
                    display: flex; 
                    align-items: start; 
                    gap: 10px;">
                    <span style="font-size: 22px;">✅</span>
                    <span>{{ session('success') }}</span>
                </div>
                <button onclick="fecharAlert()" style="
                    background: none;
                    border: none;
                    color: white;
                    font-size: 30px;
                    cursor: pointer;
                    padding: 0;
                    width: 32px;
                    height: 32px;
                    margin-left: 15px;
                ">&times;</button>
            </div>
        </div>

        <script>
            function fecharAlert() {
                const alert = document.getElementById('successAlert');
                alert.style.animation = 'fadeOut 0.3s ease';
                setTimeout(() => {
                    alert.style.display = 'none';
                }, 300);
            }
            
            // Fecha automaticamente após 5 segundos
            setTimeout(fecharAlert, 5000);
        </script>

        <style>
            @keyframes slideIn {
                from { 
                    opacity: 0;
                    transform: translateX(-50%) translateY(-40px);
                }
                to { 
                    opacity: 1;
                    transform: translateX(-50%) translateY(0);
                }
            }
            
            @keyframes fadeOut {
                from { 
                    opacity: 1;
                    transform: translateX(-50%) translateY(0);
                }
                to { 
                    opacity: 0;
                    transform: translateX(-50%) translateY(-40px);
                }
            }
        </style>
        @endif
        <header class="header">
            <a href="{{ route('home')}}">
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
        <main class="main">
            <section class="contatos">
                <div class="nossos-contatos">
                    <div class="info-box">
                        <div>
                            <img src="{{ asset('/imagens/icones/icone-fone.png
                            ') }}" alt="icone telefone" class="icones">
                        </div>
                        <div>
                            <h2>Telefone:</h2>
                            <a href="https://wa.me/5551995944991" target="_blank" class="link">(51) 99594-4991</a>
                        </div>
                    </div>
                    <div class="info-box">
                        <div>
                            <img src="{{ asset('/imagens/icones/icone-email.png') }}" alt="icone e-mail" class="icones">
                        </div>
                        <div class="">
                            <h2>E-mail:</h2>
                            <a href="mailto:alusimesquadrias@gmail.com" target="_blank" class="link">alusimesquadrias@gmail.com</a>
                        </div>
                    </div>
                    <div  class="info-box">
                        <div>
                            <img src="{{ asset('/imagens/icones/icone-location.png') }}" alt="icone localização" class="icones">
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
                    <a href="{{ route('mensagem') }}" class="links">Mensagem</a>
                </div>
            </section>
        </main>
        <footer class="rodape">
            <h3>© 2025 copyright. Todos os direitos reservados.</h3>
        </footer>
    </body>
</html>