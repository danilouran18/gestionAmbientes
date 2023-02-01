<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elementos_estaticos_ambientes', function (Blueprint $table) {
            $table->integer('id_elemento_ambiente')->primary();
            $table->string('tipo_dispositivo');
            $table->string('marca');
            $table->string('modelo');
            $table->string('placa');
            $table->integer('id_numero_ambiente')->nullable();

            $table->foreign('id_numero_ambiente')->references('id_numero_ambiente')->on('ambientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elementos_estaticos_ambientes');
    }
};
