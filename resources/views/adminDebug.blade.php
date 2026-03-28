<!DOCTYPE html>
<html>
<head>
    <title>Visualizador de Dados - Alusim</title>
    <style>
        body { font-family: sans-serif; padding: 20px; background: #f4f4f4; }
        table { width: 100%; border-collapse: collapse; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; font-size: 13px; }
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
                <th>Remoção (Booleano)</th>
                <th>Data</th>
                <th>Mensagem</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dados as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nome }} {{ $item->sobrenome }}</td>
                <td>{{ $item->tipo_obra }}</td>
                <td>
                    <span class="tag {{ $item->remocao ? 'sim' : 'nao' }}">
                        {{ $item->remocao ? '1 (SIM)' : '0 (NÃO)' }}
                    </span>
                </td>
                <td>{{ $item->created_at->format('d/m/Y H:i') }}</td>
                <td><small>{{ Str::limit($item->mensagem, 50) }}</small></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>