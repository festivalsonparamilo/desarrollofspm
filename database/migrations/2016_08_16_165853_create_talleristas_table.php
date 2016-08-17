<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalleristasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talleristas', function (Blueprint $table) {
            $table->engine= 'InnoDB';
            $table->string('nombre');
            $table->text('materiales'):
            $table->tinyInteger('cuota');
            $table->integer('precio');
            $table->tinyInteger('stand');
            $table->string('rango');
            $table->string('id_ṕarticipante')->references('id_participante')->on('participantes');
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
        Schema::drop('talleristas');
    }
}
