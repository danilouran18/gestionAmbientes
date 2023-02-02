<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elemento extends Model
{
    use HasFactory;

    public function tipoDispositivo()
    {
        return $this->belongsTo('App\Models\TipoDispositivo');
    }

    public function estadoElemento()
    {
        return $this->belongsTo('App\Models\EstadoElemento');
    }

    public function detallePrestamos()
    {
        return $this->hasMany('App\Models\DetallePrestamo');
    }

    
}
