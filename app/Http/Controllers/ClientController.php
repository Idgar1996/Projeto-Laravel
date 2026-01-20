<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;

class ClientController extends Controller
{    
    public function show()
    {
        return view('mensagem');
    }
    public function enviar(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'nullable|string|max:255',
            'telefone' => 'required|string|max:20',
            'email' => 'required|email',
            'cor' => 'nullable|string',
            'estado' => 'required|in:reforma,novo',
            'mensagem' => 'required|string',
        ]);

        // ✅ Usando o Model Cliente
        clientes::create([
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'cor' => $request->cor,
            'tipo_obra' => $request->estado,
            'mensagem' => $request->mensagem,
        ]);

        return redirect('/contact') ->with('success', 'Dados enviados com sucesso!');
    }
}
