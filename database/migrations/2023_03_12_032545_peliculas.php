<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('Peliculas', function (Blueprint $table) {
            $table->bigIncrements('idPeliculas');
            $table->string('Nombre');
            $table->string('Descripcion');
            $table->string('Genero');
            $table->string('Pais');
            $table->string('Distribuidor');
            $table->string('FechaSubida');
            $table->string('Duracion');
            $table->string('Clasificacion');
            $table->string('Poster');

            $table->timestamps();
        });        
    }
};
