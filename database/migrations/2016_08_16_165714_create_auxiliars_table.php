<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuxiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auxiliars', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->string('id_auxiliar')->index();
          $table->integer('num_aux');
          $table->tinyInteger('entrada');
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
        Schema::drop('auxiliars');
    }
}
