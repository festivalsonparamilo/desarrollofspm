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
          $table->engine = 'MyISAM';
          $table->charset = 'utf8';
          $table->string('id_auxiliar')->primary();
          $table->string('nombre_aux')->nullable();
          $table->integer('num_aux')->nullable();
          $table->tinyInteger('entrada')->default(0);
          $table->String('id_participante');
          $table->foreign('id_participante')->references('id_participante')->on('participantes');
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
