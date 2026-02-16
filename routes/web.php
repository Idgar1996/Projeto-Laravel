<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitacaoController;

/* Páginas estáticas */

Route::view('/', 'home')->name("home");
Route::view('/about', 'about')->name("about");
Route::view('/servicos','servicos')->name("servicos");
Route::view('/contact','contact')->name("contact");
Route::view('/mensagem', 'mensagem')->name('mensagem');
/* Salvar solicitação */

Route::post('/solicitacao', [SolicitacaoController::class, 'store'])->name('solicitacao.store');

Route::view('/mensagem/enviada', 'mensagem_enviada')->name('mensagem.enviada');