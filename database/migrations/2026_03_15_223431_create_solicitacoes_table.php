<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('solicitacoes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('tipo_documento');
            $table->string('documento')->unique();
            $table->string('telefone');
            $table->string('email')->unique();
            $table->string('estado');
            $table->string('cep');
            $table->string('cidade');
            $table->string('rua');
            $table->string('numero');
            $table->string('bairro');
            $table->string('cor');
            $table->string('tipo_obra');
            $table->string('remocao');
            $table->text('mensagem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitacoes');
    }
};
