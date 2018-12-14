<?php

namespace Planeacion\Http\Controllers;

use Planeacion\Program_transversal;
use Planeacion\Program;
use Planeacion\Transversal;
use Illuminate\Http\Request;

class ProgramTransversalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program_transversal = Program_transversal::all();
        return view('program_transversals.index', compact('program_transversal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $program = Program::all();
        $transversal = Transversal::all();
        return view('program_transversals.create',compact('program','transversal')); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Program_transversal();
        $data->program_id = $request->input('program_id');
        $data->transversal_id = $request->input('transversal_id');
        $data->hours_pending = $request->input('hours_pending');
        $data->hours_program = $request->input('hours_program');
        $data->save();
        return redirect()->route('program_transversals.index')->with('success', 'La programación sido asignada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Planeacion\Program_transversal  $program_transversal
     * @return \Illuminate\Http\Response
     */
    public function show(Program_transversal $program_transversal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Planeacion\Program_transversal  $program_transversal
     * @return \Illuminate\Http\Response
     */
    public function edit(Program_transversal $program_transversal)
    {
        $program = Program::all();
        $transversal = Transversal::all();
        $program_transversal->find('id');
        return view('program_transversals.edit',compact('program_transversal','program','transversal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Planeacion\Program_transversal  $program_transversal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program_transversal $program_transversal)
    {
        $program_transversal->program_id = $request->get('program_id');
        $program_transversal->transversal_id = $request->get('transversal_id');
        $program_transversal->hours_pending = $request->get('hours_pending');
        $program_transversal->hours_program = $request->get('hours_program');
        $program_transversal->save();
        return redirect()->route('program_transversals.index', [$program_transversal])->with('update','La programacion a sido actualizada satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Planeacion\Program_transversal  $program_transversal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Program_transversal::find($id)->delete();
        return redirect()->route('program_transversals.index')->with('delete', 'La programacion a sido eliminada satisfactoriamente');
    }
}
