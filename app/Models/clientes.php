<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    //
    protected $table = 'clientes';

    protected $fillable = [
		'nome',
		'sobrenome',
		'telefone',
		'email',
		'cor',
		'tipo_obra',
		'mensagem',
    ];
}
