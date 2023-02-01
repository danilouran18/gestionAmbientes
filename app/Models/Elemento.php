<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elemento extends Model
{
    use HasFactory;

    public function tipo_dispositivo()
    {
        return $this->belongsTo('App\Models\Tipo_dispositivo');
    }

    public function estado_elemento()
    {
        return $this->belongsTo('App\Models\Estado_elemento');
    }

    public function detalle_prestamos()
    {
        return $this->hasMany('App\Models\Detalle_prestamo');
    }

    
}
