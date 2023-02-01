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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id('id_prestamo');
            $table->date('fecha_prestamo');
            $table->time('hora_prestamo');
            $table->date('fecha_entrega')->nullable();
            $table->time('hora_entrega')->nullable();
            $table->text('observaciones')->nullable();
            $table->integer('id_numero_ambiente')->nullable();
            $table->integer('numero_documento')->nullable();


            $table->foreign('id_numero_ambiente')->references('id_numero_ambiente')->on('ambientes');
            $table->foreign('numero_documento')->references('numero_documento')->on('users');
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
        Schema::dropIfExists('prestamos');
    }
};
