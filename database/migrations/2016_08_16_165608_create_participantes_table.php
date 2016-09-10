<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
         $table->engine = 'MyISAM';
         $table->charset = 'utf8';
         $table->string('id_participante')->primary();
         $table->string('nombre');
         $table->integer('edad')->nullable();
         $table->integer('estado')->nullable();
         $table->string('ciudad')->nullable();
         $table->string('tel_casa')->nullable();
         $table->string('tel_celu')->nullable();
         $table->string('e_mail')->nullable();
         $table->text('descripcion')->nullable();
         $table->integer('antiguedad')->default(1);
         $table->integer('categoria')->nullable();
         $table->tinyInteger('entrada')->default(0);
         $table->string('img')->nullable();
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
        Schema::drop('participantes');
    }
}
