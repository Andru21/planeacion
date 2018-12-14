<?php

namespace Planeacion\Http\Controllers;

use Planeacion\Result;
use Illuminate\Http\Request;
use Planeacion\Competition;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = result::all();
        return view('results.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compe = competition::all();
        return view('results.create',compact('compe')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = new Result();
        $result->name = $request->input('name');
        $result->competition_id = $request->input('competition_id');
        $result->save();
        return redirect()->route('results.index')->with('success', 'El Resultado de Aprendizaje a sido creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Planeacion\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Planeacion\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Result::find($id);
        $compe = Competition::all();
        return view('results.edit',compact('result','compe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Planeacion\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        $result->name = $request->get('name');
        $result->competition_id = $request->get('competition_id');
        $result->save();
        return redirect()->route('results.index', [$result])->with('update','El Resultado de Aprendizaje a sido actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Planeacion\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        result::find($id)->delete();
        return redirect()->route('results.index')->with('delete', 'El Resultado de Aprendizaje a sido eliminado satisfactoriamente');
    }
}
