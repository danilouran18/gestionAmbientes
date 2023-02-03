<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

            // Datos predeterminados para tabla rol

            $rolAdministrador = new Rol();
            // $rolAdministrador->id_rol="1";
            $rolAdministrador->nombre_rol="Administrador";
            $rolAdministrador->save();
    
            $rolInstructor = new Rol();
            // $rolInstructor->id_rol="2";
            $rolInstructor->nombre_rol="Instructor";
            $rolInstructor->save();
    
            $rolAprendiz = new Rol();
            // $rolAprendiz->id_rol="3";
            $rolAprendiz->nombre_rol="Aprendiz";
            $rolAprendiz->save();
    
            // Datos predeterminados para tabla rol
    }
}
