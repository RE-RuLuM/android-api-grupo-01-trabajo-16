<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTuristasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turistas', function (Blueprint $table) {
            $table->id('CodigoTuristas');
            $table->string('NombresTurista', 255);
            $table->string('ApellidosTurista', 255);
            $table->string('DireccionTurista', 255);
            $table->string('TelefonoTurista', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turistas');
    }
}
