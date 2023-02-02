<?php

namespace Database\Seeders;

use App\Models\EstadoAmbiente;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoAmbienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('estado_ambientes')->Insert([
            'estado_ambiente'=>'Disponible'

        ]);

        DB::table('estado_ambientes')->Insert([
          
            'estado_ambiente'=>'Ocupado'
          

        ]);

        // DB::table('estado_ambientes')->Insert([
        //     'estado_ambiente'=>'Mantenimiento'

        // ]);

     
        $estadoAmbienteMantenimiento=new EstadoAmbiente();
        $estadoAmbienteMantenimiento->estado_ambiente='Mantenimiento';
        $estadoAmbienteMantenimiento->save();

    }
}
