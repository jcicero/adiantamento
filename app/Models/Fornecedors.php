<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedors extends Model
{
    public function danfes()
    {
        return $this->hasMany('App\Models\Danfes');
    }
}
