<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramTransversalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_transversals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('program_id')->unsigned();
            $table->integer('transversal_id')->unsigned();
            $table->integer('hours_pending')->unsigned();
            $table->integer('hours_program')->unsigned();
            $table->timestamps();

            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('transversal_id')->references('id')->on('transversals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_transversals');
    }
}
