<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('file_number');
            $table->integer('program_code');
            $table->integer('program_version');
            $table->string('name');
            $table->string('level');
            $table->string('modality');
            $table->integer('number_apprentice');
            $table->date('start_date');
            $table->date('finish_date');
            $table->string('company');
            $table->string('lead_instructor');
            $table->time('hours_plant');
            $table->time('hours_contractor');
            $table->time('hours_contractor_extern');
            $table->time('hours_total');
            $table->integer('hours_curricular_design');
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
        Schema::dropIfExists('programs');
    }
}
