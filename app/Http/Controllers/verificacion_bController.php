<?php

namespace App\Http\Controllers;

use App\Models\Placas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vehiculo;
use App\Models\Verificacion_b;

class verificacion_bController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('verificacion_bs')
        ->select('verificacion_bs.*', 'vehiculos.marca','vehiculos.serie')
        ->join('vehiculos', 'verificacion_bs.id_vehiculo','vehiculos.id')
        ->get();
        return view('verificacion_b.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selec2 =Placas::all();
        $selec = Vehiculo::all();
        return view('verificacion_b.create')->with('selec', $selec)
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
        $valores = new Verificacion_b();
        $valores->placa = $request->get('placa');
        $valores->engomado = $request->get('engomado');
        $valores->verificacion = $request->get('verificacion');
        $valores->fecha_pago = $request->get('fecha_pago');
        $valores->fecha_estimada = $request->get('fecha_estimada');
        $valores->monto = $request->get('monto');
        $valores->estatus = $request->get('estatus');
        $valores->id_vehiculo = $request->get('vehiculo');
        if($archivo= $request->file('archivo')){
            $rutaguardarpdf= 'Verificaciones B/';
            $archivonombre= date('YmdHis'). "." . $archivo->getClientOriginalExtension();
            $archivo->move($rutaguardarpdf, $archivonombre);
            $valores->archivo="$archivonombre";
        }
        $valores->save();
        return redirect('/verificacion_b');
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
        $selec2 =Placas::all();
        $selec=Vehiculo::all();
        $valores=Verificacion_b::find($id);
        $datos=DB::table('verificacion_bs')
        ->join('vehiculos', 'verificacion_bs.id_vehiculo','vehiculos.id')
        ->where('verificacion_bs.id', "$id")
        ->get();
        return view('verificacion_b.edit')->with('valores', $valores)
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
        $valores = Verificacion_b::find($id);
        $valores->placa = $request->get('placa');
        $valores->engomado = $request->get('engomado');
        $valores->verificacion = $request->get('verificacion');
        $valores->fecha_pago = $request->get('fecha_pago');
        $valores->fecha_estimada = $request->get('fecha_estimada');
        $valores->monto = $request->get('monto');
        $valores->estatus = $request->get('estatus');
        $valores->id_vehiculo = $request->get('vehiculo');
        $valores->save();
        return redirect('/verificacion_b');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valores = Verificacion_b::find($id);
        unlink('Verificaciones B/'.$valores->archivo);
        $valores->delete();
        return redirect('/verificacion_b');
    }
}
