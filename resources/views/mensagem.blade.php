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
                <form action="" method="POST" class="formulario">
                    <section class="dados_pessoais">
                        <div class="entradas">
                            <div class="campos">
                                <label for="nome">Digite seu nome:</label>
                                <input type="text" name="nome" id="nome" required>
                            </div>
                            <div class="campos">
                                <label for="sobrenome">Digite seu sobrenome:</label>
                                <input type="text" name="sobrenome" id="sobrenome" required>
                            </div>
                            <div class="campos">
                                <label for="cpf">Digite seu CPF:</label>
                                <input type="text" name="cpf" id="cpf" required>
                            </div class="campos">
                        </div>
                        <div class="entradas">
                            <div class="campos">
                                <label for="telefone">Digite seu telefone:</label>
                                <input type="tel" name="telefone" id="telefone" required>
                            </div>
                            <div class="campos">
                                <label for="email">Digite seu e-mail:</label>
                                <input type="email" name="email" id="email">
                            </div>
                        </div>
                        <div class="entradas">
                            <div class="campos">
                                <label for="estado">Selecione o seu estado:</label>
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
                                    <option value="rio_grande_do_sul">RS</option>
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
                                <label for="cep">Digite seu CEP:</label>
                                <input type="text" name="cep" id="cep" required>
                            </div>
                            <div class="campos">
                                <label for="cidade">Sua cidade:</label>
                                <input type="text" name="cidade" id="cidade" disabled>
                            </div>
                        </div>
                        <div class="entradas">
                            <div class="campos">
                                <label for="rua">Digite o nome da sua rua:</label>
                                <input type="text" name="rua" id="rua" required>
                            </div>
                            <div class="campos">
                                <label for="numero">Digite o número da sua casa:</label>
                                <input type="text" name="numero" id="numero" required>
                            </div>
                            <div class="campos">
                                <label for="bairro">Digite seu bairro:</label>
                                <input type="text" name="bairro" id="bairro" required>
                            </div>
                        </div>
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
                            <button type="reset">Limpar campos</button>
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