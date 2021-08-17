<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vehiculo;
use App\Models\Verificacion_f;

class verificacion_fController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('verificacion_fs')
        ->select('verificacion_fs.*', 'vehiculos.marca','vehiculos.placas')
        ->join('vehiculos', 'verificacion_fs.id_vehiculo','vehiculos.id')
        ->get();
        return view('verificacion_f.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selec = Vehiculo::all();
        return view('verificacion_f.create')->with('selec', $selec);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valores = new Verificacion_f();
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
        return redirect('/verificacion_f');
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
        $valores=Verificacion_f::find($id);
        $datos=DB::table('verificacion_fs')
        ->join('vehiculos', 'verificacion_fs.id_vehiculo','vehiculos.id')
        ->where('verificacion_fs.id', "$id")
        ->get();
        return view('verificacion_f.edit')->with('valores', $valores)
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
        $valores = Verificacion_f::find($id);
        $valores->verificacion = $request->get('verificacion');
        $valores->fecha = $request->get('fecha');
        $valores->estatus = $request->get('estatus');
        $valores->nombre = $request->get('nombre');
        $valores->id_vehiculo = $request->get('vehiculo');
        $valores->save();
        return redirect('/verificacion_f');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valores = Verificacion_f::find($id);
        unlink('PDF/'.$valores->archivo);
        $valores->delete();
        return redirect('/verificaion_f');
    }
}
