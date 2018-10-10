<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHisEnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('his_ens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',500);
            $table->string('resultado');
            $table->string('puesto',500);
            $table->string('observacion');
            $table->string('estatus');
            $table->timestamps();
            $table->integer('ens_id')->unsigned()->index();
            $table->integer('usu_id')->unsigned()->index();

            //llaves foraneas 
            $table->foreign('ens_id')->references('id')->on('ensamblajes')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('his_ens');
    }
}
