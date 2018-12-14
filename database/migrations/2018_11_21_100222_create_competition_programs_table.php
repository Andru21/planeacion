<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competition_programs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('competition_id')->unsigned();
            $table->integer('program_id')->unsigned();
            //HORAS DEL DISEÑO CURRICULAR
            $table->integer('hours_curricular_design');
            //HORAS PROGRAMADAS AÑO 2018 
            $table->integer('hours_program_2018');
            //RESTA DE LAS HORAS DEL DISEÑO CURRICULAR Y LAS HORAS PROGRAMADAS EN EL AÑO 2018
            $table->integer('hours_pending');
            //HORAS A PROGRAMAR 2017
            $table->integer('hours_program_2019');
            //SALDO DE HORAS POR PROGRAMAR PARA LOS PROXIMOS AÑOS
            $table->integer('hours_balance');
            $table->string('instructor_profile');
            $table->timestamps();

            $table->foreign('competition_id')->references('id')->on('competitions');
            $table->foreign('program_id')->references('id')->on('programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competition_programs');
    }
}
