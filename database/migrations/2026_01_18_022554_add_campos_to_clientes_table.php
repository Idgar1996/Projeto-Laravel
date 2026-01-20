<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {
            // Verifique primeiro quais campos já existem
            if (!Schema::hasColumn('clientes', 'sobrenome')) {
                $table->string('sobrenome')->nullable()->after('nome');
            }
            
            if (!Schema::hasColumn('clientes', 'cor')) {
                $table->string('cor')->nullable();
            }
            
            if (!Schema::hasColumn('clientes', 'tipo_obra')) {
                $table->enum('tipo_obra', ['reforma', 'novo'])->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropColumn(['sobrenome', 'cor', 'tipo_obra']);
        });
    }
};