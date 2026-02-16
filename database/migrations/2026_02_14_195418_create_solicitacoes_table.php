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
        $table->string('nome',100);
        $table->string('sobrenome',100);
        $table->enum('tipo_documento',['cpf','cnpj']);
        $table->string('documento',20)->unique();
        $table->string('telefone',20);
        $table->string('email',150)->unique();
        $table->string('estado',50);
        $table->string('cep',10);
        $table->string('cidade',100);
        $table->string('rua',150);
        $table->string('numero',10);
        $table->string('bairro',100);
        $table->string('cor',50);
        $table->enum('tipo_obra',['Nova','Reforma','Amplicação']);
        $table->boolean('remocao');
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

