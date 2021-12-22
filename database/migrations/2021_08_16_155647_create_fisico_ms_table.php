<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFisicoMsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fisico_ms', function (Blueprint $table) {
            $table->id();
            $table->string('placa');
            $table->integer('verificacion');
            $table->string('terminacion');
            $table->date('fecha_pago');
            $table->date('fecha_estimada');
            $table->integer('monto');
            $table->string('estatus');
            $table->string('archivo');
            $table->unsignedBigInteger('id_vehiculo');
            $table->foreign('id_vehiculo')->references('id')->on('vehiculos');
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
        Schema::dropIfExists('fisico_ms');
    }
}
