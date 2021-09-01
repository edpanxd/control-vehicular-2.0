<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\propietarios_a;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\DB;

class propietarios_aController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valores = DB::table('propietarios_as')
        ->select('propietarios_as.*', 'vehiculos.marca','vehiculos.serie')
        ->join('vehiculos', 'propietarios_as.id_vehiculo','vehiculos.id')
        ->get();
        return view('propietario.index')
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
        return view('propietario.create')->with('selec', $selec);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valores = new propietarios_a();
        $valores->vendedor= $request->get('vendedor');
        $valores->comprador= $request->get('comprador');
        $valores->id_vehiculo=$request->get('vehiculo');
        if($ide_ven= $request->file('ide_ven')){
            $rutaguardarpdf= 'Propietarios anteriores/';
            $archivonombre= date('YmdHis'). "." . $ide_ven->getClientOriginalExtension();
            $ide_ven->move($rutaguardarpdf, $archivonombre);
            $valores->ide_ven="$archivonombre";
        }
        if($ide_com= $request->file('ide_com')){
            $rutaguardarpdf= 'Propietarios anteriores/';
            $archivonombre= date('YmdHis'). "." . $ide_com->getClientOriginalExtension();
            $ide_com->move($rutaguardarpdf, $archivonombre);
            $valores->ide_com="$archivonombre";
        }
        $valores->save();
        return redirect('/propietario');
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
        $valores=propietarios_a::find($id);
        $datos=DB::table('propietarios_as')
        ->join('vehiculos', 'propietarios_as.id_vehiculo','vehiculos.id')
        ->where('propietarios_as.id', "$id")
        ->get();
        return view('propietario.edit')->with('valores', $valores)
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
        $valores = propietarios_a::find($id);
        $valores->vendedor= $request->get('vendedor');
        $valores->comprador= $request->get('comprador');
        $valores->id_vehiculo=$request->get('vehiculo');
        $valores->save();
        
        return redirect('/propietario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valores = propietarios_a::find($id);
        unlink('Propietarios anteriores/'.$valores->archivo_per);
        $valores->delete();
        return redirect('/propietario')
        ->with('status_success','Eliminado Correctamente');
    }
}
