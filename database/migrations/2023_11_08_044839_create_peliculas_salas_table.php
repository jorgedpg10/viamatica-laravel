<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelicula_sala', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelicula_id');
            $table->unsignedBigInteger('sala_id');
            //$table->dateTime('fecha_publicacion'); 
            //$table->dateTime('fecha_fin');  he movido estos campos a la tabla 'peliculas' porque creo que sería un mejor disño

            $table->foreign('pelicula_id')->references('id')->on('peliculas'); 
            $table->foreign('sala_id')->references('id')->on('salas'); 

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
        Schema::dropIfExists('pelicula_sala');
    }
}
