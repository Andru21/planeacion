<?php

namespace Planeacion\Http\Controllers;

use Illuminate\Http\Request;
use Planeacion\Competition_program;
use Planeacion\Competition;
use Planeacion\Program;


class CompetitionProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competition_program = Competition_program::all();
        return view('competition_programs.index', compact('competition_program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $program = Program::all();
        $competition = Competition::all();
        return view('competition_programs.create',compact('program','competition')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Competition_program();
        $data->competition_id = $request->input('competition_id');
        $data->program_id = $request->input('program_id');
        $data->hours_curricular_design = $request->input('hours_curricular_design');
        $data->hours_program_2018 = $request->input('hours_program_2018');
        $data->hours_pending = $request->input('hours_pending');
        $data->hours_program_2019 = $request->input('hours_program_2019');
        $data->hours_balance = $request->input('hours_balance');
        $data->instructor_profile = $request->input('instructor_profile');
        $data->save();
        return redirect()->route('competition_programs.index')->with('success', 'La programación sido asignada satisfactoriamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Competition_program $competition_program)
    {
        $program = Program::all();
        $competition = Competition::all();
        $competition_program->find('id');
        return view('competition_programs.edit',compact('competition_program','program','competition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competition_program $competition_program)
    {
        $competition_program->competition_id = $request->get('competition_id');
        $competition_program->program_id = $request->get('program_id');
        $competition_program->hours_curricular_design = $request->get('hours_curricular_design');
        $competition_program->hours_program_2018 = $request->get('hours_program_2018');
        $competition_program->hours_pending = $request->get('hours_pending');
        $competition_program->hours_program_2019 = $request->get('hours_program_2019');
        $competition_program->hours_balance = $request->get('hours_balance');
        $competition_program->instructor_profile = $request->get('instructor_profile');
        $competition_program->save();
        return redirect()->route('competition_programs.index', [$competition_program])->with('update','La programacion a sido actualizada satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Competition_program::find($id)->delete();
        return redirect()->route('competition_programs.index')->with('delete', 'La programacion a sido eliminada satisfactoriamente');
    }
}
