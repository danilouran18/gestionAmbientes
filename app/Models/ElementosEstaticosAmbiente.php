<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElementosEstaticosAmbiente extends Model
{
    use HasFactory;

    public function ambiente(){
        return $this->belongsTo('App\Models\Ambiente');
    }
}
