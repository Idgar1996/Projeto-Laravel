<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Alusim</title>
        <meta name="description" content="Site de orçamentos para aberturas de aluminio ">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link href="{{ asset('css/mensagem.css')}}" rel="stylesheet"/>
    </head>
    <body>
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
                    </nav>
            </aside>
        </header>
        <main class="main">
            @if(session('success'))
                <div style="background-color: #d4edda; color: #155724; padding: 15px; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 20px; width: 150px">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div style="background-color: #f8d7da; color: #721c24; padding: 15px; border: 1px solid #f5c6cb; border-radius: 5px; margin-bottom: 20px;">
                    <strong>Ops! Algo deu errado:</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('solicitacao.store') }}"  method="POST" class="container-form-dados">
                @csrf
                <h1>Envie uma mensagem personalizada</h1>
                <h2>Preencha o fomulário abaixo e descreva sua necessidade com detalhes.</h2>
                <section class="container-dados" id="dados-pessoais">
                    <h3>Dados pessoais:</h3>
                    <div class="card-dados">
                        <div class="input-dados">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome" required title="Digite seu primeiro nome"  placeholder="Ex: João">
                        </div>
                        <div class="input-dados">
                            <label for="sobrenome">Sobrenome:</label>
                            <input type="text" name="sobrenome" id="sobrenome" required title="Digite seu sobrenome completo" placeholder="Ex: da Silva">
                        </div>
                        <div class="input-dados">
                            <label for="documento">Documento:</label>
                            <input type="text" name="documento" id="documento" required placeholder="Ex: 999.999.999-99 ou 99.999.999/9999-99">
                        </div>
                        <div class="input-dados">
                            <label for="telefone">Telefone:</label>
                            <input type="tel" name="telefone" id="telefone" required class="input" placeholder="Ex: (99) 99999-9999">
                        </div>
                        <div class="input-dados">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email" placeholder="Ex: email@email.com">
                        </div>
                        <div class="input-dados">
                            <label>Tipo de documento:</label>
                            <div>
                                <input type="radio" name="tipo_documento" value="cpf" checked>
                                <label for="cpf">CPF</label>
                            </div>
                            <div>
                                <input type="radio" name="tipo_documento" value="cnpj">
                                <label for="cnpj">CNPJ</label>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="container-dados" id="dados-obra">
                    <h3>Dados da obra:</h3>
                    <div class="card-dados">
                        <div class="input-dados" id="estado">
                            <label for="estado">Estado:</label>
                            <select name="estado" required>
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
                        <div class="input-dados">
                            <label for="cep">CEP:</label>
                            <input type="text" name="cep" id="cep" required placeholder="Ex: 99999-99">
                        </div>
                        <div class="input-dados">
                            <label for="cidade">Cidade:</label>
                            <input type="text" name="cidade" id="cidade" value="" readonly>
                        </div>
                        <div class="input-dados">
                            <label for="rua">Rua:</label>
                            <input type="text" name="rua" id="rua" required placeholder="Ex: João da Silva">
                        </div>
                        <div class="input-dados">
                            <label for="numero">Número:</label>
                            <input type="text" name="numero" id="numero" required placeholder="Ex: 100">
                        </div>
                        <div class="input-dados">
                            <label for="bairro">Bairro:</label>
                            <input type="text" name="bairro" id="bairro" required placeholder="Ex: Centro">
                        </div>
                    </div>
                </section>
                <hr>
                <section class="container-dados" id="informacoes">
                    <h3>Informações sobre a obra:</h3>
                    <div class="card-dados" style="grid-template-rows: 1fr; align-items:start">
                        <div class="input-dados" id="cor">
                            <label for="cor">Selecione a cor para o seu orçamento:</label>
                            <select name="cor">
                                <option value="BRANCO" selected>BRANCO</option>
                                <option value="PRETO">PRETO</option>
                                <option value="CINZA">CINZA</option>
                                <option value="MARROM">MARROM</option>
                                <option value="BRONZE">BRONZE</option>
                                <option value="AMADEIRADO">AMADEIRADO</option>
                            </select>
                        </div>
                        <div class="input-dados" id="tipo-obra">
                            <label for="tipo_obra">Selecione o tipo de obra:</label>
                            <select name="tipo_obra">
                                <option value="NOVA" selected>NOVA</option>
                                <option value="REFORMA">REFORMA</option>
                                <option value="AMPLIAÇÃO">AMPLIAÇÃO</option>
                            </select>
                        </div>
                        <div class="input-dados" id="remocao">
                            <label for="remocao">É necessário a remoção das aberturas antigas?</label>
                            <select name="remocao">
                                <option value="Sim" selected>SIM</option>
                                <option value="Não">NÂO</option>
                            </select>
                        </div>
                    </div>
                </section>
                <hr>
                <section class="container-dados">
                    <div class="container-mensagem">                    
                        <h2>Digite sua mensagem abaixo:</h2>
                        <textarea name="mensagem" cols="" rows="10" class="textarea" placeholder="Descreva, com o máximo de detalhes, o serviço solicitado. Em caso de obra nova, informe o tipo de obra, a quantidade de aberturas e, se houver, algum modelo de referência. Em situações de reforma ou ampliação, descreva o padrão das aberturas existentes e a quantidade necessária."></textarea>
                    </div>
                    <div class="container-botoes">
                        <button type="reset" class="botao-resetar-formulario">Limpar formulário</button>
                        <button type="submit" class="botao-enviar">Enviar</button>
                    </div>
                </section>
            </form>
            <script src="{{ asset('js/mascaraDocumento.js') }}"></script>
            <script src="{{ asset('js/mascaraTelefone.js') }}"></script>
            <script src="{{ asset('js/mascaraCep.js') }}"></script>
            <script src="{{ asset('js/buscaCep.js') }}"></script>
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