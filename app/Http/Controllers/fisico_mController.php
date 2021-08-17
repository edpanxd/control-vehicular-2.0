<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vehiculo;
use App\Models\fisico_m;

class fisico_mController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('fisico_ms')
        ->select('fisico_ms.*', 'vehiculos.marca','vehiculos.placas')
        ->join('vehiculos', 'fisico_ms.id_vehiculo','vehiculos.id')
        ->get();
        return view('fisico_m.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selec = Vehiculo::all();
        return view('fisico_m.create')->with('selec', $selec);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valores = new fisico_m();
        $valores->verificacion = $request->get('verificacion');
        $valores->fecha = $request->get('fecha');
        $valores->estatus = $request->get('estatus');
        $valores->nombre = $request->get('nombre');
        $valores->id_vehiculo = $request->get('vehiculo');
        if($archivo= $request->file('archivo')){
            $rutaguardarpdf= 'PDF/';
            $archivonombre= date('YmdHis'). "." . $archivo->getClientOriginalExtension();
            $archivo->move($rutaguardarpdf, $archivonombre);
            $valores->archivo="$archivonombre";
        }
        $valores->save();
        return redirect('/fisico_m');
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
        $valores=fisico_m::find($id);
        $datos=DB::table('fisico_ms')
        ->join('vehiculos', 'fisico_ms.id_vehiculo','vehiculos.id')
        ->where('fisico_ms.id', "$id")
        ->get();
        return view('fisico_m.edit')->with('valores', $valores)
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
        $valores = fisico_m::find($id);
        $valores->verificacion = $request->get('verificacion');
        $valores->fecha = $request->get('fecha');
        $valores->estatus = $request->get('estatus');
        $valores->nombre = $request->get('nombre');
        $valores->id_vehiculo = $request->get('vehiculo');
        $valores->save();
        return redirect('/fisico_m');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valores = fisico_m::find($id);
        unlink('PDF/'.$valores->archivo);
        $valores->delete();
        return redirect('/fisico_m')
        ->with('status_success','Eliminado Correctamente');
    }
}
