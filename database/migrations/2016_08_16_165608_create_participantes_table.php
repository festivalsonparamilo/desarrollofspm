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
          $table->engine = 'InnoDB';
         $table->string('id_participante')->index();
         $table->string('nombre');
         $table->integer('edad');
         $table->integer('estado');
         $table->string('ciudad');
         $table->string('tel_casa');
         $table->string('tel_celu');
         $table->string('e_mail');
         $table->text('descripcion');
         $table->integer('antiguedad');
         $table->integer('categoria');
         $table->tinyInteger('entrada');
         $table->string('img');
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
