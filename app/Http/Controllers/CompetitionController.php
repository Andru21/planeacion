<?php

namespace Planeacion\Http\Controllers;

use Illuminate\Http\Request;
use Planeacion\Competition;


class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competition = competition::all();
        return view('competitions.index', compact('competition'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('competitions.create'); 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $competition = new Competition();
        $competition->name = $request->input('name');
        $competition->save();
        return redirect()->route('competitions.index')->with('success', 'La competencia a sido creada satisfactoriamente');

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
        $competition = Competition::find($id);
        return view('competitions.edit',compact('competition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competition $competition)
    {
        $competition->name = $request->get('name');
        $competition->save();
        return redirect()->route('competitions.index', [$competition])->with('update','La competencia a sido actualizada satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        competition::find($id)->delete();
        return redirect()->route('competitions.index')->with('delete', 'La competencia a sido eliminada satisfactoriamente');
    }
}
