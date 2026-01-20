<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function mostrarFormulario()
    {
        return view ('mensagem');
    }

    public function processarFormulario(Request $request)
    {
        $request->validate([
            'telefone'=>'required|regex:/\([0-9}{2}\) [0-9]{5}-[0-9[{4}/'
        ]);
        $telefone = $request->input('telefone');

        $telefoneNumeros = preg_replace('/\D/', '', $telefone);

    }
}
?>