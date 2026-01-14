<!DOCTYPE html>
<html>
    <head>
        <title>Alusim</title>
        <meta name="description" content="Site de orçamentos para aberturas de aluminio ">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link href="{{ asset('css/mensagem.css') }}" rel="stylesheet"/>
    </head>
    <body>
        <header class="header">
            <a href="{{ route("index") }}">
                <img src="{{ asset("imagens/logo/logo_alusim1.png") }}" alt="Logo Alusim" class="logo" title="Logo Alusim">
            </a>
            <aside class="aside">
                    <nav class="menu-nav">
                        <div class="menu-item">
                            <a href="{{ route("index") }}" class="links">Home</a>
                        </div>
                        <div class='menu-item'>
                            <a href="{{ route("servicos") }}" class="links">Fotos</a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route("about_us") }}" class="links">Sobre nós</a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route("contact") }}" class="links">Contato</a>
                        </div>
                    </nav>
            </aside>
        </header>
        <main class="main">
            <fieldset class="fieldset">
                <legend class="LegendFieldset">Deixe aqui sua mensagem:</legend>
                <form action="" method="post" class="campo_mensagem">
                    @csrf
                    <div class="dados_cliente">
                        <div class="dados">
                            <div class="campo">
                                <label for="nome">Digite seu nome:</label>
                                <input type="text" name="nome" required placeholder="Ex: João" pattern="[A-Za-zÀ-ÿ\s]+" title="Digite apenas letras"> 
                            </div>
                            <div class="campo">
                                <label for="sobrenome">Digite seu sobrenome:</label>
                                <input type="text" name="sobrenome" required placeholder="Ex: da Silva" pattern="[A-Za-zÀ-ÿ\s]+" title="Digite apenas letras">
                            </div>
                        </div>
                        <div class="dados">
                            <div class="campo">
                                <label for="telefone">Digite seu telefone:</label>
                                <input 
                                type="tel" name="telefone" required placeholder="(99) 99999-9999" pattern="[0-9]{10,11}" title="Digite apenas número (DDD + telefone)" maxlength="11">
                            </div>
                            <div class="campo">
                                <label for="email">Digite seu e-mail:</label>
                                <input type="email" name="email" required placeholder="email@email.com/br">
                            </div>
                        </div>
                        <div class="dados">
                            <div class="campo">
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
                            <div class="campo">
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
                    </div>
                    <button type="submit">enviar</button>
                </form> 
            </fieldset>
        </main>
        <footer class="rodape">
            <h3>© 2025 copyright. Todos os direitos reservados.</h3>
        </footer>
    </body>
</html>