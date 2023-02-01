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
        Schema::create('elementos', function (Blueprint $table) {
            $table->integer('serial')->primary();
            $table->string('placa')->unique();
            $table->string('marca');
            $table->string('modelo');
            $table->unsignedBigInteger('tipo_dispositivo')->nullable();
            $table->unsignedBigInteger('estado')->nullable();

            
            $table->foreign('tipo_dispositivo')->references('id_tipo_dispositivo')->on('tipo_dispositivos');
            $table->foreign('estado')->references('id_estado_elemento')->on('estado_elementos');

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
        Schema::dropIfExists('elementos');
    }
};
