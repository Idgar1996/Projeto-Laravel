<h2>Nova solicitação recebida</h2>

<p><strong>Nome:</strong> {{ $solicitacao->nome }} {{ $solicitacao->sobrenome }}</p>
<p><strong>Documento:</strong> {{ $solicitacao->tipo_documento }} - {{ $solicitacao->documento }}</p>
<p><strong>Telefone:</strong> {{ $solicitacao->telefone }}</p>
<p><strong>Email:</strong> {{ $solicitacao->email }}</p>
<p><strong>Estado:</strong> {{ $solicitacao->estado }}</p>
<p><strong>Cidade:</strong> {{ $solicitacao->cidade }}</p>
<p><strong>Rua:</strong> {{ $solicitacao->rua }}, {{ $solicitacao->numero }}</p>
<p><strong>Bairro:</strong> {{ $solicitacao->bairro }}</p>
<p><strong>Cor:</strong> {{ $solicitacao->cor }}</p>
<p><strong>Tipo de obra:</strong> {{ $solicitacao->tipo_obra }}</p>
<p><strong>Remoção:</strong> {{ $solicitacao->remocao ? 'Sim' : 'Não' }}</p>
<p><strong>Mensagem:</strong><br>{{ $solicitacao->mensagem }}</p>

<hr>
<p>Data: {{ $solicitacao->created_at }}</p>
