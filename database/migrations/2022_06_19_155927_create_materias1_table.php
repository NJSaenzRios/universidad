<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias1', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('can_creditos');
            $table->string('docente');
            $table->string('asig_pre');
            $table->integer('horas_automas');
            $table->integer('horas_dirigidas');
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
        Schema::dropIfExists('materias1');
    }
};
