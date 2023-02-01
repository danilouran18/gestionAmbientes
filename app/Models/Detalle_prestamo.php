<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_prestamo extends Model
{
    use HasFactory;

    public function elemento()
    {
        
        return $this-> belongsTo('App\Models\Elemento');
    }
    

    public function prestamo()
    {
        
        return $this-> belongsTo('App\Models\Prestamo');
    }
}
