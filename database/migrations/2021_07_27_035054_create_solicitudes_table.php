<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('FOLIO_REQUISICIÓN')->nullable();
            $table->string('EQUIPO');
            $table->string('MARCA')->nullable();
            $table->string('MODELO')->nullable();
            $table->string('EMPRESA');
            $table->string('SUCURSAL');
            $table->string('USUARIO_FINAL')->nullable();
            $table->string('DEPARTAMENTO_AREA')->nullable();
            $table->integer('CANTIDAD')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
}
