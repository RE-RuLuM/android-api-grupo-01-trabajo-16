<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViajesContratadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viajes_contratados', function (Blueprint $table) {
            $table->id('CodigoViaje');
            $table->string('Clase', 20);
            $table->unsignedBigInteger('NumeroVuelo');
            $table->unsignedBigInteger('CodigoTuristas');
            $table->unsignedBigInteger('CodigoSucursal');
            $table->unsignedBigInteger('CodigoEstancia');

            $table->foreign('NumeroVuelo')->references('NumeroVuelo')->on('vuelos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('CodigoTuristas')->references('CodigoTuristas')->on('turistas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('CodigoSucursal')->references('CodigoSucursal')->on('sucursales')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('CodigoEstancia')->references('CodigoEstancia')->on('estancias')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viajes_contratados');
    }
}
