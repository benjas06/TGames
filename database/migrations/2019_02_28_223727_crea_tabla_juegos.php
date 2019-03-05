<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTablaJuegos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juegos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('genero');
            $table->unsignedInteger('plataforma_id');
            $table->timestamps();

            //$table->foreign('plataforma_id')->references('id')->on('plataformas');
            //$table->foreign('plataforma_id')->references('id')->on('plataformas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juegos');
    }
}
