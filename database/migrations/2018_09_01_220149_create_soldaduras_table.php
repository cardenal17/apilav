<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoldadurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soldaduras', function (Blueprint $table) {
            $table->increments('sol_id');
            $table->integer('codigo');
            $table->string('etiqueta');
            $table->integer('cantidad');
            $table->string('consecutivo');
            $table->string('orden_pro');
            $table->string('estatus');
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
        Schema::dropIfExists('soldaduras');
    }
}
