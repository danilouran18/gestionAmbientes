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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('numero_documento')->primary();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('id_rol')->nullable();
            $table->unsignedBigInteger('idDocumento')->nullable();

            $table->foreign('id_rol')->references('id_rol')->on('rols') ;
            $table->foreign('idDocumento')->references('idDocumento')->on('tipo_documentos');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
