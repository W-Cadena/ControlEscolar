<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriaTable extends Migration
{
    public function up()
    {
        Schema::create('materia', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('maestro_id')->nullable(); // Añadir esta línea para la relación
            // Agregar más campos según sea necesario
            $table->timestamps();

            $table->foreign('maestro_id')->references('id')->on('maestros')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('materia');
    }
}
