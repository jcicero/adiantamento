<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adiantamentos extends Model
{
    protected $fillable = ['responsavel',
                            'processo',
                            'valor',
                            'data',
                            'user_id',
                            'status'];
}
