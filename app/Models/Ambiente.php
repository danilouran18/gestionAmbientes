<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
    use HasFactory;

    public function elementos_estaticos(){
        return $this->hasMany('App\Models\Elementos_estaticos_ambiente');
    }

    public function estado_ambiente(){
        return $this->belongsTo('App\Models\Estado_ambiente');

    }

    public function prestamos(){
        return $this->hasMany('App\Models\Prestamo');
    }
}
