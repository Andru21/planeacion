 <?php

namespace Planeacion\Http\Controllers;

use Illuminate\Http\Request;
use Planeacion\Program;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $program = program::all();
        return view('programs.index', compact('program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programs.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $program = new Program();
        $program->file_number = $request->input('file_number');
        $program->program_code = $request->input('program_code');
        $program->program_version = $request->input('program_version');
        $program->name = $request->input('name');
        $program->level = $request->input('level');
        $program->modality = $request->input('modality');
        $program->number_apprentice = $request->input('number_apprentice');
        $program->start_date = $request->input('start_date');
        $program->finish_date = $request->input('finish_date');
        $program->company = $request->input('company');
        $program->lead_instructor = $request->input('lead_instructor');
        $program->hours_plant = $request->input('hours_plant');
        $program->hours_contractor = $request->input('hours_contractor');
        $program->hours_contractor_extern = $request->input('hours_contractor_extern');
        $program->hours_total = $request->input('hours_total');
        $program->hours_curricular_design = $request->input('hours_curricular_design');
        $program->save();
        return redirect()->route('programs.index')->with('success', 'El programa a sido creado satisfactoriamente');
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
    public function edit($id)
    {
        $program = Program::find($id);
        return view('programs.edit',compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        $program->file_number = $request->get('file_number');
        $program->program_code = $request->get('program_code');
        $program->program_version = $request->get('program_version');
        $program->name = $request->get('name');
        $program->level = $request->get('level');
        $program->modality = $request->get('modality');
        $program->number_apprentice = $request->get('number_apprentice');
        $program->start_date = $request->get('start_date');
        $program->finish_date = $request->get('finish_date');
        $program->company = $request->get('company');
        $program->lead_instructor = $request->get('lead_instructor');
        $program->hours_plant = $request->get('hours_plant');
        $program->hours_contractor = $request->get('hours_contractor');
        $program->hours_contractor_extern = $request->get('hours_contractor_extern');
        $program->hours_total = $request->get('hours_total');
        $program->hours_curricular_design = $request->get('hours_curricular_design');
        $program->save();
        return redirect()->route('programs.index', [$program])->with('update','El programa a sido actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        program::find($id)->delete();
        return redirect()->route('programs.index')->with('delete', 'El programa a sido eliminado satisfactoriamente');
    }
}
