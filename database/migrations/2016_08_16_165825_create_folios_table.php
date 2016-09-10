<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folios', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->charset = 'utf8';
            $table->string('id_folio')->index();
            $table->string('cadena')->default('xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
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
        Schema::drop('folios');
    }
}
