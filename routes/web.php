<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SolicitacaoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", function () {
    return view ("home");
}) ->name("home");

Route::get("/about", function () {
    return view ("about");
}) ->name("about");

Route::get("/servicos", function () {
    return view ("servicos");
}) ->name("servicos");

Route::get("/contact", function () {
    return view("contact");
}) ->name("contact");

Route::get("/mensagem", [App\Http\Controllers\ClientController::class, 'show'])->name("mensagem");

Route::post('/mensagem', [App\Http\Controllers\ClientController::class, 'enviar'])->name('mensagem');

Route::post('/salvar', [SolicitacaoController::class, 'store'])->name('salvar');

Route::get('/mensagem', function () {
    return view('mensagem');
})->name('mensagem.enviada');


// Route::get('/formulario', [FormController::class, 'mostrarFormulario']);

// Route::post('/salvar-dados', [FormController::class, 'processarFormulario']);