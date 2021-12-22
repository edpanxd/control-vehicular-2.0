<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarjetacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarjetacs', function (Blueprint $table) {
            $table->id();
            $table->string('folio');
            $table->string('placas');
            $table->string('archivo_pla');
            $table->string('estatus');
            $table->date('inicio');
            $table->date('vencimiento');
            $table->date('fecha_pago');
            $table->date('fecha_estimada');
            $table->integer('monto');
            $table->integer('año');
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
        Schema::dropIfExists('tarjetacs');
    }
}
