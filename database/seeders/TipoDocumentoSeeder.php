<?php

namespace Database\Seeders;
use App\Models\TipoDocumento;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoCedula = new TipoDocumento();
        $tipoCedula->tipo = "Cédula de ciudadanía";
        $tipoCedula->save();

        $tipoExtranjeria = new TipoDocumento();
        $tipoExtranjeria->tipo = "Cédula de extranjería";
        $tipoExtranjeria->save();

        $tipoTarjeta = new TipoDocumento();
        $tipoTarjeta->tipo = "Tarjeta de identidad";
        $tipoTarjeta->save();

        $tipoPermanencia = new TipoDocumento();
        $tipoPermanencia->tipo = "Permiso especial de permanencia";
        $tipoPermanencia->save();

        $tipoProteccion = new TipoDocumento();
        $tipoProteccion->tipo = "Permiso por protección temporal";
        $tipoProteccion->save();
    }
}
