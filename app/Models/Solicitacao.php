<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $table = 'solicitacoes';

    protected $fillable = [
        'nome',
        'sobrenome',
        'tipo_documento',
        'documento',
        'telefone',
        'email',
        'estado',
        'cep',
        'cidade',
        'rua',
        'numero',
        'bairro',
        'cor',
        'tipo_obra',
        'remocao',
        'mensagem'
    ];
}
