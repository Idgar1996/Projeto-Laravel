<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Alusim</title>
        <meta name="description" content="Site de orçamentos para aberturas de aluminio ">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link href="{{ asset('css/mensagem.css')}}" rel="stylesheet"/>
        @vite(['resources/js/app/js', 'resources/css/app.css'])
    </head>
    <body>
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
        <main class="main">
            <fieldset class="fieldset">
                <legend>Deixe aqui sua mensagem:</legend>
                <form action="{{ route('mensagem') }}" method="post" class="formulario_mensagem">
                    @csrf
                    <div class="campo_entradas">
                        <div class="dados_pessoais">
                            <div>
                                <label for="nome">Digite seu nome:</label>
                                <input 
                                type="text" 
                                name="nome" 
                                required
                                pattern="\[A-Za-zÀ-ÿ\s]*"
                                placeholder="João">
                            </div>
                            <div>
                                <label for="sobrenome">Digite seu sobrenome:</label>
                                <input
                                type="text" 
                                name="sobrenome" 
                                required
                                placeholder="da Silva"
                                pattern="\[A-Za-zÀ-ÿ\s]*">
                            </div>

                        </div>
                        <div class="dados_contato">
                            <div>
                                <label for="telefone">Digite seu telefone:</label>
                                <input 
                                type="tel" 
                                name="telefone"
                                id="telefone" 
                                required
                                placeholder="(99) 99999-9999"
                                pattern="\([0-9]{2}\) [0-9]{5}-[0-9]{4}">
                            </div>
                            <div>
                                <label for="email">Digite seu e-mail:</label>
                                <input 
                                type="email" 
                                name="email" 
                                required
                                placeholder="email@email.com(.br)">
                            </div>
                        </div>
                        <div class="dados_abertura">
                            <div>
                                <label for="cor">Selecione a cor desejada:</label>
                                <select name="cor" >
                                    <option value="branco">Branco</option>
                                    <option value="preto">Preto</option>
                                    <option value="cinza">Cinza</option>
                                    <option value="amadeirado">Amadeirado</option>
                                    <option value="bronze">Bronze</option>
                                    <option value="marrom">Marrom</option>
                                </select>
                            </div>
                            <div>
                                <label for="remocao">Estado:</label>
                                <p>Selecione abaixo se será uma substituição ou se é um espaço novo para a abertura</p>
                                <div>
                                    <label for="reforma">Reforma</label>
                                    <input type="radio" name="estado" value="reforma" checked>
                                    <label for="novo">Novo</label>
                                    <input type="radio" name="estado" value="novo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="aba_mensagem">
                        <label for="mensagem">Digite abaixo sua mensagem:</label>
                        <textarea name="mensagem" required placeholder="Digite com detalhes o tipo e modelo de esquadria que você deseja orçar." rows="10" cols="80"></textarea>
                        <br>    
                        <button type="submit">Enviar</button>
                        <br>
                        <button type="reset">Limpas Campos</button>
                    </div>
                </form>
            </fieldset>
            <script src="{{ asset('js/mascaras.js') }}"></script>
        </main>
        <footer class="rodape">
            <h3>© 2025 copyright. Todos os direitos reservados.</h3>
        </footer>
    </body>
</html>