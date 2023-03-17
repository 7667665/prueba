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
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idNotas');
            $table->foreign('idNotas')->references('id')->on('notas');
            $table->integer('idPeriodo');
            $table->integer('idCurso');
            $table->integer('idestudiante');
            $table->double('nota3',8,2);
            $table->double('nota2',8,2);
            $table->double('nota1',8,2);
            $table->date('date');
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
        Schema::dropIfExists('materias');
    }
};
