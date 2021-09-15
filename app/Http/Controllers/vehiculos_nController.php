<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use App\Models\vehiculos_n;
use Illuminate\Support\Facades\DB;

class vehiculos_nController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valores = vehiculos_n::all();
        return view('vehiculosn.index')
        ->with('valores', $valores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $selec = Vehiculo::all();
        return view('vehiculosn.create')->with('selec', $selec);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valores = new vehiculos_n();
        $valores->no_factura = $request->get('no_factura');
        $valores->refactura = $request->get('refactura');
        $valores->carta_fa = $request->get('carta_fa');
        $valores->id_vehiculo = $request->get('vehiculo');
        $valores->save();
        return redirect('/vehiculon');
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
        $selec=Vehiculo::all();
        $valores=vehiculos_n::find($id);
        $datos=DB::table('vehiculos_ns')
        ->join('vehiculos', 'vehiculos_ns.id_vehiculo','vehiculos.id')
        ->where('vehiculos_ns.id', "$id")
        ->get();
        return view('vehiculosn.edit')->with('valores', $valores)
        ->with('selec', $selec)
        ->with('datos', $datos);
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
        $valores = vehiculos_n::find($id);
        $valores->no_factura = $request->get('no_factura');
        $valores->refactura = $request->get('refactura');
        $valores->carta_fa = $request->get('carta_fa');
        $valores->id_vehiculo = $request->get('vehiculo');
       
        $valores->save();
        return redirect('/vehiculon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valores = vehiculos_n::find($id);
        $valores->delete();
        return redirect('/vehiculon')
        ->with('status_success','Eliminado Correctamente');
    }
}
