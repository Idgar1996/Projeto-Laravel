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
                <legend class="legend"><h1>Cadastro:</h1></legend>
                <form action="home.blade.php"  method="POST" class="formulario">
                    @csrf
                    <section class="dados_pessoais">
                        <div class="entradas">
                            <div class="campos">
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" id="nome" required title="Digite seu primeiro nome" placeholder="Ex: João">
                            </div>
                            <div class="campos">
                                <label for="sobrenome">Sobrenome:</label>
                                <input type="text" name="sobrenome" id="sobrenome" required title="Digite seu sobrenome completo" placeholder="Ex: da Silva">
                            </div>
                            <div class="campos">
                                <label for="documento">Documento:</label>
                                <input type="text" name="documento" id="documento" required placeholder="Ex: 999.999.999-99">
                            </div>
                        </div>
                        <div class="entradas">
                            <div class="campos">
                                <label for="telefone">Telefone:</label>
                                <input type="tel" name="telefone" id="telefone" required class="input" placeholder="Ex: (99) 99999-9999">
                            </div>
                            <div class="campos">
                                <label for="email">E-mail:</label>
                                <input type="email" name="email" id="email" placeholder="Ex: email@email.com">
                            </div>
                        </div>
                        <div class="entradas">
                            <div class="campos">
                                <label for="estado">Estado:</label>
                                <select name="estado" id="estado" required>
                                    <option value="acre">AC</option>
                                    <option value="alagoas">AL</option>
                                    <option value="amapa">AP</option>
                                    <option value="amazonas">AM</option>
                                    <option value="bahia">BA</option>
                                    <option value="ceara">CE</option>
                                    <option value="espirito_santo">ES</option>
                                    <option value="goias">GO</option>
                                    <option value="maranhao">MA</option>
                                    <option value="mato_grosso">MT</option>
                                    <option value="mato_grosso_do_sul">MS</option>
                                    <option value="minas_gerais">MG</option>
                                    <option value="para">PA</option>
                                    <option value="paraiba">PB</option>
                                    <option value="parana">PR</option>
                                    <option value="pernanbuco">PE</option>
                                    <option value="piaui">PI</option>
                                    <option value="rio_de_janeiro">RJ</option>
                                    <option value="rio_grande_do_norte">RN</option>
                                    <option value="rio_grande_do_sul" selected>RS</option>
                                    <option value="rondonia">RO</option>
                                    <option value="roraima">RR</option>
                                    <option value="santa_catarina">SC</option>
                                    <option value="sao_paulo">SP</option>
                                    <option value="sergipe">SE</option>
                                    <option value="tocantins">TO</option>
                                    <option value="distrito_federal">DF</option>
                                </select>
                            </div>
                            <div class="campos">
                                <label for="cep">CEP:</label>
                                <input type="text" name="cep" id="cep" required placeholder="Ex: 99999-99">
                            </div>
                            <div class="campos">
                                <label for="cidade">Cidade:</label>
                                <input type="text" name="cidade" id="cidade" disabled>
                            </div>
                        </div>
                        <div class="entradas">
                            <div class="campos">
                                <label for="rua">Rua:</label>
                                <input type="text" name="rua" id="rua" required placeholder="Ex: João da Silva">
                            </div>
                            <div class="campos">
                                <label for="numero">Número:</label>
                                <input type="text" name="numero" id="numero" required placeholder="Ex: 100">
                            </div>
                            <div class="campos">
                                <label for="bairro">Bairro:</label>
                                <input type="text" name="bairro" id="bairro" required placeholder="Ex: Centro">
                            </div>
                        </div>                            
                        <button type="reset" style="width: 100px;">Limpar campos</button>
                    </section>
                    <hr>
                    <section class="obra">
                        <h2>Informações sobre a obra:</h2>
                        <div>
                            <label for="cor">Selecione a cor para o seu orçamento:</label>
                            <select name="cor" id="cor">
                                <option value="branco">Branco</option>
                                <option value="preto">Preto</option>
                                <option value="cinza">Cinza</option>
                                <option value="marrom">Marrom</option>
                                <option value="bronze">Bronze</option>
                                <option value="amadeirado">Amadeirado</option>
                            </select>
                        </div>
                        <div>
                            <p for="tipo_obra">Selecione o tipo de obra:</p>
                            <label>Reforma</label>
                            <input type="radio" name="tipo_obra" id="reforma">
                            <label>Nova</label>
                            <input type="radio" name="tipo_obra" id="nova">
                            <label>Ampliação</label>
                            <input type="radio" name="tipo_obra" id="ampliação">
                        </div>
                        <div>
                            <p name="remover">Em caso de reforma é necessário a remoção das aberturas antigas?</p>
                            <label>Sim</label>
                            <input type="radio" name="remover">
                            <label>Não</label>
                            <input type="radio" name="remover">
                        </div>
                    </section>
                    <hr>
                    <section class="mensagem">
                        <div>                    
                            <h1>Digite sua mensagem abaixo:</h1>
                            <p>Descreva com o maximo de detalhes o tipo de serviço que você precisa, no caso de obra nova, qual o tipo, quantidade de aberturas e se existe algum modelo que você já conheça e que queira mais informações. No caso de reforma, descreva o padrão que você já tem em outras aberturas para que possamos lhe oferecer a abertura que mais se adequa a sua necessidade. O mesmo serve para ampliação, descreva detalhes sobre as suas aberturas ja existentes e a quantidade de aberturas que serão necessárias.</p>
                            <textarea name="mensagem" id="" cols="100" rows="20" class="textarea"></textarea>
                        </div>
                        <div>
                            <button type="submit">Enviar</button>
                        </div>
                    </section>
                </form>
            </fieldset>
            <script src="{{ asset('js/mascaras.js') }}"></script>
            <script src="{{ asset('js/buscaCep.js') }}"></script>
        </main>
        <footer class="rodape">
            <h3>© 2025 copyright. Todos os direitos reservados.</h3>
        </footer>
    </body>
</html>