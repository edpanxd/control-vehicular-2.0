<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vehiculo;
use App\Models\Verificacion_f2;
use App\Models\Placas;

class verificacion_f2Controller extends Controller
{
    public function index()
    {
        $data=DB::table('verificacion_f2s')
        ->select('verificacion_f2s.*', 'vehiculos.marca','vehiculos.serie')
        ->join('vehiculos', 'verificacion_f2s.id_vehiculo','vehiculos.id')
        ->get();
        return view('verificacion_f2.index')->with('data', $data);
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
        return view('verificacion_f2.create')->with('selec', $selec)
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
        $valores = new Verificacion_f2();
        $valores->placa = $request->get('placa');
        $valores->verificacion = $request->get('verificacion');
        $valores->fecha = $request->get('fecha');
        $valores->estatus = $request->get('estatus');
        $valores->id_vehiculo = $request->get('vehiculo');
        if($archivo= $request->file('archivo')){
            $rutaguardarpdf= 'PDF/';
            $archivonombre= date('YmdHis'). "." . $archivo->getClientOriginalExtension();
            $archivo->move($rutaguardarpdf, $archivonombre);
            $valores->archivo="$archivonombre";
        }
        $valores->save();
        return redirect('/verificacion_f2');
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
        $selec2=Placas::all();
        $selec=Vehiculo::all();
        $valores=Verificacion_f2::find($id);
        $datos=DB::table('verificacion_f2s')
        ->join('vehiculos', 'verificacion_f2s.id_vehiculo','vehiculos.id')
        ->where('verificacion_f2s.id', "$id")
        ->get();
        return view('verificacion_f2.edit')->with('valores', $valores)
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
        $valores = Verificacion_f2::find($id);
        $valores->placa = $request->get('placa');;
        $valores->verificacion = $request->get('verificacion');
        $valores->fecha = $request->get('fecha');
        $valores->estatus = $request->get('estatus');
        $valores->id_vehiculo = $request->get('vehiculo');
        $valores->save();
        return redirect('/verificacion_f2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valores = Verificacion_f2::find($id);
        unlink('PDF/'.$valores->archivo);
        $valores->delete();
        return redirect('/verificacion_f2');
    }
}
