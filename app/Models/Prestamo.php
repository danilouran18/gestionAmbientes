<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function ambiente(){
        return $this->belongsTo('App\Models\Ambiente');
    }

    public function detalle_prestamos()
    {
        return $this->hasMany('App\Models\Detalle_prestamo');
    }
}
