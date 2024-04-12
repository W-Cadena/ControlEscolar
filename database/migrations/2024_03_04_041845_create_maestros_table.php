<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaestrosTable extends Migration
{
    public function up()
    {
        Schema::create('maestros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            // Agregar más campos según sea necesario
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('maestros');
    }
}
