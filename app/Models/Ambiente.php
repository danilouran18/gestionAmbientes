<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
    use HasFactory;

    public function elementosEstaticosAmbientes(){
        return $this->hasMany('App\Models\ElementosEstaticosAmbiente');
    }

    public function estadoAmbiente(){
        return $this->belongsTo('App\Models\EstadoAmbiente');

    }

    public function Prestamos(){
        return $this->hasMany('App\Models\Prestamo');
    }
}
