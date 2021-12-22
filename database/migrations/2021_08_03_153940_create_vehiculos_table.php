<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('submarca');
            $table->string('tipo');
            $table->string('modelo');
            $table->string('color');
            $table->string('serie');
            $table->string('numeroM');
            $table->string('estatus');
            $table->string('uso');
            $table->string('nombre_p');
            $table->string('adquisicion');
            $table->string('empresa');
            $table->string('localidad');
            $table->string('imagen');
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
        Schema::dropIfExists('vehiculos');
    }
}
