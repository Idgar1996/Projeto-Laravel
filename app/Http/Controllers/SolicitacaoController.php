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
        $estadoFormatado = ucwords(str_replace('_', ' ', $request->estado));

        if ($request->tipo_obra !== 'REFORMA') {
            $request->merge(['remocao' => 0]);
        } else {
            $valorRemocao = ($request->remocao === 'Sim') ? 1 : 0;
            $request->merge(['remocao' => $valorRemocao]);
        }
            
        // // Limpas os dados
        $request->merge([
                'documento' => preg_replace('/\D/', '', $request->documento),
                'telefone' => preg_replace('/\D/', '', $request->telefone),
                'cep' => preg_replace('/\D/', '', $request->cep),
                'email' => strtolower($request->email),
                'estado' => $estadoFormatado,
            ]);
        // Validação
        $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'tipo_documento' => 'required|in:cpf,cnpj',
            'documento' => 'required|string',
            'telefone' => 'required|string',
            'email' => 'required|string',
            'estado' => 'required|string',
            'cep' => 'required|string',
            'cidade' => 'required|string',
            'rua' => 'required|string',
            'numero' => 'required|string',
            'bairro' => 'required|string',
            'cor' => 'required|string',
            'tipo_obra' => 'required|string',
            'remocao' => 'required|boolean',
            'mensagem' => 'required|string',
        ]);

        $solicitacao = Solicitacao::create([
            'nome' => ucwords(strtolower($request->nome)),
            'sobrenome' => ucwords(strtolower($request->sobrenome)),
            'tipo_documento' => $request->tipo_documento,
            'documento' => $request->documento,
            'telefone' => $request->telefone,
            'email' => strtolower($request->email),
            'estado' => $estadoFormatado,
            'cep' => $request->cep,
            'cidade' => ucwords(strtolower($request->cidade)),
            'rua' => ucwords(strtolower($request->rua)),
            'numero' => $request->numero,
            'bairro' => ucwords(strtolower($request->bairro)),
            'cor' => $request->cor,
            'tipo_obra' => $request->input("tipo_obra"),
            'remocao' => $request->remocao,
            'mensagem' => $request->mensagem,
        ]);

        try{
            Mail::to('geanschneider1996@gmail.com')->send(new SolicitacaoMail($solicitacao));
        } catch (\Exception $e) {
            
        }
        

        return redirect()->route('mensagem')->with('success', 'Solicitação enviada com sucesso! Em breve entraremos em contato!');
    }

}
