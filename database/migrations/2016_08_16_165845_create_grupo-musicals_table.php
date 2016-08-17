<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoMusicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo-musicals', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('nombre');
            $table->tinyInteger('stand');
            $table->string('responsable');
            $table->string('genero');
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
        Schema::drop('grupo-musicals');
    }
}
