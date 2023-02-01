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
        Schema::create('detalle_prestamos', function (Blueprint $table) {
            $table->id('id_detalle_prestamo');
            $table->string('cantidad',3)->nullable();
            $table->boolean('cargador');
            $table->unsignedBigInteger('id_prestamo');
            $table->integer('serial');

            $table->foreign('id_prestamo')->references('id_prestamo')->on('prestamos');
            $table->foreign('serial')->references('serial')->on('elementos');
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
        Schema::dropIfExists('detalle_prestamos');
    }
};
