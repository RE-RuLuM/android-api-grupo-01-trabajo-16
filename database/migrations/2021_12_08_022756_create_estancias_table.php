<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstanciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estancias', function (Blueprint $table) {
            $table->id('CodigoEstancia');
            $table->string('Pension', 45);
            $table->date('FechaEntrada');
            $table->date('FechaSalida');
            $table->unsignedBigInteger('CodigoHotel');

            $table->foreign('CodigoHotel')->references('CodigoHotel')->on('hoteles')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estancias');
    }
}
