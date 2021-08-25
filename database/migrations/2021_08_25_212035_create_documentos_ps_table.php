<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosPsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos_ps', function (Blueprint $table) {
            $table->id();
            $table->string('vendedor');
            $table->string('comprador');
            $table->string('contrato_com');
            $table->string('archivo_con');
            $table->string('carta_res');
            $table->string('archivo_car');
            $table->string('identificacion');
            $table->string('archivo_iden');
            $table->string('informe');
            $table->string('archivo_in');
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
        Schema::dropIfExists('documentos_ps');
    }
}
