<?php

namespace Database\Seeders;
use App\Models\EstadoElemento;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoElementoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estadoElementoDisponible=new EstadoElemento();
        $estadoElementoDisponible->estado_elemento='Disponible';
        $estadoElementoDisponible->save();
        
        $estadoElementoOcupado=new EstadoElemento();
        $estadoElementoOcupado->estado_elemento='Ocupado';
        $estadoElementoOcupado->save();

        $estadoElementoMantenimiento=new EstadoElemento();
        $estadoElementoMantenimiento->estado_elemento='Mantenimiento';
        $estadoElementoMantenimiento->save();
    }
}
