<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placas', function (Blueprint $table) {
            $table->id();
            $table->string('placas');
            $table->string('entidad');
            $table->date('vencimiento');
            $table->date('alta');
            $table->date('baja');
            $table->date('fecha_pago');
            $table->date('fecha_estimada');
            $table->integer('monto');
            $table->integer('año');
            $table->string('cambio_propietario');
            $table->date("fecha_cambio_p")->nullable();
            $table->string('estatus');
            $table->string('observaciones');
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
        Schema::dropIfExists('placas');
    }
}
