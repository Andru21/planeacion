<?php

namespace Planeacion\Http\Controllers;

use Illuminate\Http\Request;
use Planeacion\Transversal;

class TransversalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = transversal::all();
        return view('transversals.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transversals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trans = new transversal();
        $trans->name = $request->input('name');
        $trans->technical_hours = $request->input('technical_hours');
        $trans->technologist_hours = $request->input('technologist_hours');
        $trans->auxiliary_hours = $request->input('auxiliary_hours');
        $trans->save();
        return redirect()->route('transversals.index')->with('success', '¡¡Listo!!, la transversal a sido creada satisfactoriamente');
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
        $transversal = Transversal::find($id);
        return view('transversals.edit',compact('transversal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transversal $transversal)
    {

        $transversal->name = $request->get('name');
        $transversal->technical_hours = $request->get('technical_hours');
        $transversal->technologist_hours = $request->get('technologist_hours');
        $transversal->auxiliary_hours = $request->get('auxiliary_hours');
        $transversal->save();
        return redirect()->route('transversals.index', [$transversal])->with('update','La transversal a sido actualizada satisfactoriamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        transversal::find($id)->delete();
        return redirect()->route('transversals.index')->with('delete', 'La transversal a sido eliminado satisfactoriamente');
    }
}
    