<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vehiculo;
use App\Models\Verificacion_a;
use App\Models\Placas;

class Verificacion_aController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('verificacion_as')
        ->select('verificacion_as.*', 'vehiculos.marca','vehiculos.serie')
        ->join('vehiculos', 'verificacion_as.id_vehiculo','vehiculos.id')
        ->get();
        return view('verificacion_a.index')->with('data', $data);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selec2 = Placas::all();
        $selec = Vehiculo::all();
        return view('verificacion_a.create')
        ->with('selec', $selec)
        ->with('selec2', $selec2);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valores = new Verificacion_a();
        $valores->placa = $request->get('placa');
        $valores->engomado = $request->get('engomado');
        $valores->verificacion = $request->get('verificacion');
        $valores->fecha = $request->get('fecha');
        $valores->estatus = $request->get('estatus');
        $valores->id_vehiculo = $request->get('vehiculo');
        if($archivo= $request->file('archivo')){
            $rutaguardarpdf= 'Verificaciones A/';
            $archivonombre= date('YmdHis'). "." . $archivo->getClientOriginalExtension();
            $archivo->move($rutaguardarpdf, $archivonombre);
            $valores->archivo="$archivonombre";
        }
        $valores->save();
        return redirect('/verificacion_a');
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
        
        $selec2 = Placas::all();
        $selec=Vehiculo::all();
        $valores=Verificacion_a::find($id);
        $datos=DB::table('verificacion_as')
        ->join('vehiculos', 'verificacion_as.id_vehiculo','vehiculos.id')
        ->where('verificacion_as.id', "$id")
        ->get();
        return view('verificacion_a.edit')->with('valores', $valores)
        ->with('selec', $selec)
        ->with('datos', $datos)
        ->with('selec2', $selec2);
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
        $valores = Verificacion_a::find($id);
        $valores->verificacion = $request->get('verificacion');
        $valores->fecha = $request->get('fecha');
        $valores->estatus = $request->get('estatus');
        $valores->nombre = $request->get('nombre');
        $valores->id_vehiculo = $request->get('vehiculo');
        $valores->save();
        return redirect('/verificacion_a');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valores = Verificacion_a::find($id);
        unlink('PDF/'.$valores->archivo);
        $valores->delete();
        return redirect('/verificacion_a');
    }
}
