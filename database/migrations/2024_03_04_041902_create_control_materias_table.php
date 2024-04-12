<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlMateriasTable extends Migration
{
    public function up()
    {
        Schema::create('control_materias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('materia_id');
            $table->unsignedBigInteger('alumno_id');
            $table->timestamps();

            $table->foreign('materia_id')->references('id')->on('materias')->onDelete('cascade');
            $table->foreign('alumno_id')->references('id')->on('alumnos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('control_materias');
    }
}
