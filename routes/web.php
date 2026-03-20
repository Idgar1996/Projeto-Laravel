<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitacaoController;
use App\Http\Controllers\ImagemController;

/* Páginas estáticas */

Route::view('/', 'home')->name("home");
Route::view('/about', 'about')->name("about");
Route::view('/servicos','servicos')->name("servicos");
Route::view('/contact','contact')->name("contact");
Route::view('/mensagem', 'mensagem')->name('mensagem');
/* Salvar solicitação */

Route::post('/solicitacao', [SolicitacaoController::class, 'store'])->name('solicitacao.store');



Route::post('/imagem', [\App\Http\Controllers\ImagemController::class, 'store'])->name('imagem.store');
Route::get('/imagem/{filename}', [\App\Http\Controllers\ImagemController::class, 'show'])->name('imagem.show');