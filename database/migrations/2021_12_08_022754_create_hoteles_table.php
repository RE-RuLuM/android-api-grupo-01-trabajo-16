<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoteles', function (Blueprint $table) {
            $table->id('CodigoHotel');
            $table->string('NombreHotel', 255);
            $table->string('DireccionHotel', 255);
            $table->string('CiudadHotel', 255);
            $table->string('TelefonoHotel', 30);
            $table->string('FotoHotel', 255);
            $table->integer('PlazasHotel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoteles');
    }
}
