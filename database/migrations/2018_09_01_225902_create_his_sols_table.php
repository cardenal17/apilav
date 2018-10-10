<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHisSolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('his_sols', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 500);
            $table->string('resultado');
            $table->string('observacion', 500);
            $table->string('estatus');
            $table->timestamps();
            $table->integer('sol_id')->unsigned()->index();
            $table->integer('usu_id')->unsigned()->index();
            //llaves foraneas 
            $table->foreign('sol_id')->references('sol_id')->on('soldaduras')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('his_sols');
    }
}
