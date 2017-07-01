<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tutorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estudiante_id');
            $table->string('ramo_id');
            $table->string('tutor_id')->nullable();
            $table->string('fecha')->nullable();
            $table->string('monto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
