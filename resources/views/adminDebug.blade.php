<!DOCTYPE html>
<html>
<head>
    <title>Visualizador de Dados - Alusim</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f4f4f4; }
        table { width: 100%; background: #fff; box-shadow: 2px 4px 5px #33333380}
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; font-size: 14px; }
        th { background-color: #003366; color: white; }
        tr:hover { background-color: #f1f1f1; }
        .tag { padding: 4px 8px; border-radius: 4px; font-weight: bold; }
        .sim { background: #d4edda; color: #155724; }
        .nao { background: #f8d7da; color: #721c24; }
    </style>
</head>
<body>
    <h1>Solicitações Salvas no Banco</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Tipo Obra</th>
                <th>Remoção</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dados as $item)
            <tr onclick="abrirModal({{ json_encode($item) }})" style="cursor:pointer;" title='Clique para ver os detalhes'>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nome }} {{ $item->sobrenome }}</td>
                <td>{{ $item->tipo_obra }}</td>
                <td>
                    <span class="tag {{ $item->remocao ? 'sim' : 'nao' }}">
                        {{ $item->remocao ? 'SIM' : 'NÃO' }}
                    </span>
                </td>
                <td>{{ $item->created_at->format('d/m/Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div id="modalDados" class="modal-overlay" onclick="fecharModal(event)">
        <div class="modal-content" onclick="event.stopPropagation()">
            <span class="close-button" onclick="fecharModalExterno()">&times;</span>
            <h2 id="modal-titulo" style="color: #003366; margin-top: 0;">Detalhes</h2>
            <hr>
            <div id="modal-body" class="grid-modal">
                </div>
        </div>
    </div>

    <style>
        .modal-overlay {
            display: none; position: fixed; z-index: 1000; left: 0; top: 0;
            width: 100%; height: 100%; background-color: rgba(0,0,0,0.6);
            backdrop-filter: blur(3px);
        }
        .modal-content {
            background-color: #fff; margin: 2% auto; padding: 25px; /* Reduzi um pouco a margem superior (2%) */
            border-radius: 12px; width: 80%; max-width: 700px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            animation: animarEntrada 0.3s ease-out;
            position: relative;
            max-height: 90vh; /* Altura máxima de 90% da altura da tela */
            display: flex; /* Necessário para o corpo rolar corretamente */
            flex-direction: column; /* Organiza título, conteúdo e rodapé em coluna */
        }
        .close-button { float: right; font-size: 30px; cursor: pointer; color: #aaa; }
        .close-button:hover { color: #000; }
        .grid-modal {
            display: grid; 
            grid-template-columns: 1fr 1fr; 
            gap: 20px;
            margin-top: 20px;
            overflow-y: auto;
            padding-right: 10px;
        }
        .campo { border-bottom: 1px solid #eee; padding-bottom: 5px; }
        .campo label { display: block; font-weight: bold; color: #003366; font-size: 0.8rem; text-transform: uppercase; }
        .campo span { font-size: 1rem; color: #333; }
        @keyframes animarEntrada {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
    <script>
    function abrirModal(dados) {
        const body = document.getElementById('modal-body');
        const titulo = document.getElementById('modal-titulo');
        
        titulo.innerText = "Solicitação: " + dados.nome + " " + dados.sobrenome;
        
        // Mapeamento dos campos que você quer mostrar
        const mapaCampos = {
            "Documento": dados.documento,
            "E-mail": dados.email,
            "Telefone": dados.telefone,
            "Cidade/UF": `${dados.cidade} - ${dados.estado}`,
            "Endereço": `${dados.rua}, ${dados.numero} - ${dados.bairro}`,
            "CEP": dados.cep,
            "Tipo de Obra": dados.tipo_obra,
            "Cor": dados.cor,
            "Remoção": dados.remocao == 1 ? "Sim" : "Não",
            "Mensagem": dados.mensagem
        };

        body.innerHTML = ''; 

        for (const [key, value] of Object.entries(mapaCampos)) {
            const fullWidth = key === 'Mensagem' || key === 'Endereço' ? 'grid-column: span 2' : '';
            body.innerHTML += `
                <div class="campo" style="${fullWidth}">
                    <label>${key}</label>
                    <span>${value || '---'}</span>
                </div>
            `;
        }

        document.getElementById('modalDados').style.display = 'block';
    }

    function fecharModalExterno() {
        document.getElementById('modalDados').style.display = 'none';
    }

    function fecharModal(event) {
        if (event.target.id === 'modalDados') {
            fecharModalExterno();
        }
    }
    </script>
</body>
</html>