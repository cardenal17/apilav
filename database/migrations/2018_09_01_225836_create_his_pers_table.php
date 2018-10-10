<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHisPersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('his_pers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',500);
            $table->integer('puesto');
            $table->string('resultado');
            $table->string('estatus');
            $table->string('observacion');
            $table->timestamps();
            $table->integer('per_id')->unsigned()->index();
            $table->integer('usu_id')->unsigned()->index();

            //llaves foraneas 
            $table->foreign('per_id')->references('id')->on('perforados')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('usu_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('his_pers');
    }
}
