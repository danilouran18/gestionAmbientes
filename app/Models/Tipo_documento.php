<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_documento extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany('App\Models\User');
    }
}
