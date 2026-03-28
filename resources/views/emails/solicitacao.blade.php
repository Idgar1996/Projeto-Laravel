<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: sans-serif; color: #333; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; }
        .header { background-color: #003366; color: #ffffff; padding: 20px; text-align: center; }
        .content { padding: 20px; }
        .section-title { font-weight: bold; color: #003366; border-bottom: 2px solid #f0f0f0; margin-bottom: 10px; padding-bottom: 5px; }
        .info-row { margin-bottom: 8px; text-decoration: none; }
        .label { font-weight: bold; color: #666; width: 150px; display: inline-block; }
        .message-box { background: #f9f9f9; padding: 15px; border-radius: 5px; border-left: 4px solid #003366; margin-top: 10px; }
        .footer { background: #f4f4f4; padding: 15px; text-align: center; font-size: 12px; color: #999; }
        .btn-whatsapp { display: inline-block; padding: 10px 20px; background-color: #25d366; color: #fff; text-decoration: none; border-radius: 5px; font-weight: bold; margin-top: 15px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 style="margin:0;">Nova Solicitação de Orçamento</h1>
        </div>

        <div class="content">
            <div class="section-title">Dados do Cliente</div>
            <div class="info-row"><span class="label">Nome:</span> {{ $solicitacao->nome }} {{ $solicitacao->sobrenome }}</div>
            <div class="info-row"><span class="label">Documento:</span> {{ strtoupper($solicitacao->tipo_documento) }}: {{ $solicitacao->documento }}</div>
            <div class="info-row"><span class="label">E-mail:</span> {{ $solicitacao->email ?? 'Não informado' }}</div>
            <div class="info-row"><span class="label">Telefone:</span> {{ $solicitacao->telefone }}</div>
            
            {{-- BOTÃO MÁGICO PARA O WHATSAPP --}}
            <a href="https://wa.me/55{{ preg_replace('/\D/', '', $solicitacao->telefone) }}" class="btn-whatsapp">
                Chamar no WhatsApp
            </a>

            <div class="section-title" style="margin-top:25px;">Detalhes da Obra</div>
            <div class="info-row">
                <span class="label">Local:</span> 
                {{ $solicitacao->cidade }} - {{ $solicitacao->estado }}
            </div>
            <div class="info-row">
                <span class="label">Endereço:</span> 
                <span style="color: #333; text-decoration: none;">
                    {{ $solicitacao->rua }}, {{ $solicitacao->numero }} ({{ $solicitacao->bairro }})
                </span>
            </div>
            <div class="info-row">
                <span class="label">Cor:</span> {{ $solicitacao->cor }}
            </div>
            <div class="info-row">
                <span class="label">Obra/Remoção:</span> {{ $solicitacao->tipo_obra }} | {{ $solicitacao->remocao ? 'SIM' : 'NÃO' }}
            </div>

            <div class="section-title" style="margin-top:25px;">Mensagem do Cliente</div>
            <div class="message-box">
                {!! nl2br(e($solicitacao->mensagem)) !!}
            </div>
        </div>

        <div class="footer">
            Enviado via Site Alusim em {{ $solicitacao->created_at->format('d/m/Y H:i') }}
        </div>
    </div>
</body>
</html>