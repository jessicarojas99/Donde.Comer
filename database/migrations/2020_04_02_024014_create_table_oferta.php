<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOferta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oferta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombrepublicidad',45);
            $table->unsignedInteger('costo');
            $table->date('fechaincio');
            $table->date('fechafin');
            $table->unsignedInteger('rol_id');
            $table->foreign('rol_id','fk_oferta_rol')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('reserva_id');
            $table->foreign('reserva_id','fk_oferta_reserva')->references('id')->on('reserva')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('restaurante_id');
            $table->foreign('restaurante_id','fk_oferta_restaurante')->references('id')->on('restaurante')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('oferta');
    }
}
