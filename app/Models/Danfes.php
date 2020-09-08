<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Danfes extends Model
{
    protected $fillable = 
    [
        'user_id',
        'adiantamento_id',
        'fornecedor_id',
        'data',
        'nf',
        'chave',
        'ci',
        'negativa',
        'pago',
        'nf',
        'recibo',
        'atesto',
        'financeiro',
        'valor'
    ];

    public function fornecedors()
    {
        return $this->belongsTo('App\Models\Fornecedors');
    }
}
