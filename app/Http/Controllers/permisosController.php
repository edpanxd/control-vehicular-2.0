<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\permisos;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\DB;

class permisosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valores = DB::table('permisos')
        ->select('permisos.*', 'vehiculos.marca','vehiculos.serie')
        ->join('vehiculos', 'permisos.id_vehiculo','vehiculos.id')
        ->get();
        return view('permisos.index')
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
        return view('permisos.create')->with('selec', $selec);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valores = new permisos();
        $valores->no_permiso= $request->get('no_permiso');
        $valores->id_vehiculo=$request->get('vehiculo');
        if($archivo_per= $request->file('archivo_per')){
            $rutaguardarpdf= 'Permisos/';
            $archivonombre= date('YmdHis'). "." . $archivo_per->getClientOriginalExtension();
            $archivo_per->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_per="$archivonombre";
        }
        $valores->save();
        return redirect('/permiso');
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
        $valores=permisos::find($id);
        $datos=DB::table('permisos')
        ->join('vehiculos', 'permisos.id_vehiculo','vehiculos.id')
        ->where('permisos.id', "$id")
        ->get();
        return view('permisos.edit')->with('valores', $valores)
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
        $valores = permisos::find($id);
        $valores->no_permiso= $request->get('no_permiso');
        $valores->save();
        
        return redirect('/permiso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valores = permisos::find($id);
        unlink('Permisos/'.$valores->archivo_per);
        $valores->delete();
        return redirect('/permiso')
        ->with('status_success','Eliminado Correctamente');
    }
}
