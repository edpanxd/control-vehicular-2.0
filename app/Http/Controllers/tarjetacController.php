<?php

namespace App\Http\Controllers;

use App\Models\Placas;
use Illuminate\Support\Facades\DB;
use App\Models\Vehiculo;
use App\Models\tarjetac;
use Illuminate\Http\Request;


class tarjetacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valores = DB::table('tarjetacs')
        ->select('tarjetacs.*', 'vehiculos.marca','vehiculos.serie')
        ->join('vehiculos', 'tarjetacs.id_vehiculo','vehiculos.id')
        ->get();
        return view('tarjetas.index')
        ->with('valores', $valores);
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
        return view('tarjetas.create')->with('selec', $selec)
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
        $valores = new tarjetac();
        $valores->folio= $request->get('folio');
        $valores->placas= $request->get('placa');
        $valores->inicio=$request->get('inicio');
        $valores->vencimiento=$request->get('vencimiento');
        $valores->estatus=$request->get('estatus');
        $valores->id_vehiculo=$request->get('vehiculo');
        if($archivo= $request->file('archivo_pla')){
            $rutaguardarpdf= 'Tarjetas de circulacion/';
            $archivonombre= date('YmdHis'). "." . $archivo->getClientOriginalExtension();
            $archivo->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_pla="$archivonombre";
        }
        $valores->save();
        return redirect('/tarjeta');
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
        $valores=tarjetac::find($id);
        $datos=DB::table('tarjetacs')
        ->join('vehiculos', 'tarjetacs.id_vehiculo','vehiculos.id')
        ->where('tarjetacs.id', "$id")
        ->get();
        return view('tarjetas.edit')->with('valores', $valores)
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
        $valores = tarjetac::find($id);
        $valores->folio= $request->get('folio');
        $valores->placas= $request->get('placa');
        $valores->inicio=$request->get('inicio');
        $valores->vencimiento=$request->get('vencimiento');
        $valores->estatus=$request->get('estatus');
        $valores->id_vehiculo=$request->get('vehiculo');
        $valores->save();
        
        return redirect('/tarjeta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valores = tarjetac::find($id);
        unlink('Tarjetas de circulacion/'.$valores->archivo_pla);
        $valores->delete();
        return redirect('/tarjeta')
        ->with('status_success','Eliminado Correctamente');
    }
}
