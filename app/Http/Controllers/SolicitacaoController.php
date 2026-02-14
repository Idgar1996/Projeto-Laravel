<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitacao;
use Illuminate\Support\Facades\Mail;
use App\Mail\SolicitacaoMail;


class SolicitacaoController extends Controller
{
    public function store(Request $request)
    {
        // limpa números
        $cpfcnpj = preg_replace('/\D/', '', $request->documento);
        $telefone = preg_replace('/\D/', '', $request->telefone);
        $cep = preg_replace('/\D/', '', $request->cep);

        // padroniza estado
        $estado = str_replace('_', ' ', $request->estado);
        $estado = ucwords($estado);

        // padroniza remoção
        $remocao = $request->remocao == 'sim' ? 1 : 0;

        $solicitacao = Solicitacao::create([
            'nome' => ucwords(strtolower($request->nome)),
            'sobrenome' => ucwords(strtolower($request->sobrenome)),
            'tipo_documento' => $request->tipo_documento,
            'documento' => $cpfcnpj,
            'telefone' => $telefone,
            'email' => strtolower($request->email),
            'estado' => $estado,
            'cep' => $cep,
            'cidade' => ucwords(strtolower($request->cidade)),
            'rua' => ucwords(strtolower($request->rua)),
            'numero' => $request->numero,
            'bairro' => ucwords(strtolower($request->bairro)),
            'cor' => $request->cor,
            'tipo_obra' => $request->input("tipo_obra"),
            'remocao' => $remocao,
            'mensagem' => $request->mensagem,
        ]);

        Mail::to('geanschneider1996@gmail.com')->send(new SolicitacaoMail($solicitacao));

        return redirect()->route('mensagem.enviada');
    }

}
