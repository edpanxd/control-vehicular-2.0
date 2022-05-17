<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use App\Models\User;
use Illuminate\Http\Request;
Use App\Models\Vehiculo;

class empresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valores = empresa::all();
        return view("empresa.index")
        ->with('valores', $valores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("empresa.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valores = new empresa();
        $valores->empresa = strtoupper($request->get('empresa'));
        $valores->rfc = strtoupper($request->get('rfc'));
        $valores->save();
        return redirect('/empresa');

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
        $valores = empresa::find($id);
        return view('empresa.edit')->with('valores', $valores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valores = empresa::find($id);
        $valores->empresa = strtoupper($request->get('empresa'));
        $valores->rfc = strtoupper($request->get('rfc'));
        $valores->save();
        return redirect('/empresa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valores = empresa::find($id);
        $valores->delete();
        return redirect('/empresa')
        ->with('status_success','Eliminado Correctamente');
    }
}
