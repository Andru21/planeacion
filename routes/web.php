<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('programs','ProgramController');

Route::resource('competitions','CompetitionController');

Route::resource('transversals','TransversalController');

Route::resource('results','ResultController');

Route::resource('program_transversals','ProgramTransversalController');

Route::resource('competition_programs','CompetitionProgramController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('pruebas',function(){

	$program = Planeacion\Program::findOrFail(1);

	return $program->competition;

});
