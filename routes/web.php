<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitacaoController;
use App\Mail\SolicitacaoMail;
use App\Models\Solicitacao;

/* Páginas estáticas */

Route::view('/', 'home')->name("home");
Route::view('/about', 'about')->name("about");
Route::view('/servicos','servicos')->name("servicos");
Route::view('/contact','contact')->name("contact");
Route::view('/mensagem', 'mensagem')->name('mensagem');
/* Salvar solicitação */

Route::post('/solicitacao', [SolicitacaoController::class, 'store'])->name('solicitacao.store');

Route::get('/preview-email', function() {
    
    $solicitação = Solicitacao::latest()->first();

    if (!$solicitação) {
        $solicitação = new Solicitacao ([
            'nome' => 'Gean',
            'sobrenome' => 'Schneider',
            'tipo_documento' => 'cpf',
            'documento' => '000.000.000-00',
            'telefone' => '51999999999',
            'email' => 'teste@alusim.com.br',
            'estado' => 'Rio Grande do Sul',
            'cidade' => 'Bom Princípio',
            'rua' => 'Rua Exemplo',
            'numero' => '123',
            'bairro' => 'Centro',
            'cor' => 'Branco',
            'tipo_obra' => 'Nova',
            'remocao' => 'Sim',
            'mensagem' => "Esta é uma mensagem de teste para verificar\no layout do e-mail com quebras de linha."  
        ]);
    }
    return new SolicitacaoMail($solicitação);
});

Route::get('/ver-dados', function () {
    $dados = Solicitacao::orderBy('created_at', 'desc')->get();
    return view('adminDebug', compact('dados'));
});