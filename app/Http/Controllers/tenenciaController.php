<?php

namespace App\Http\Controllers;

use App\Models\polizas;
use App\Models\Vehiculo;
use App\Models\tenencias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tenenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('tenencias')
        ->select('tenencias.*', 'vehiculos.marca','vehiculos.placas')
        ->join('vehiculos', 'tenencias.id_vehiculo','vehiculos.id')
        ->get();
        return view('tenencias.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selec = Vehiculo::all();
        return view('tenencias.create')->with('selec', $selec);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valores = new tenencias();
        $valores->tenencia = $request->get('tenencia');
        $valores->pago = $request->get('pago');
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
        return redirect('/tenencia');
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
        $valores=tenencias::find($id);
        $datos=DB::table('tenencias')
        ->join('vehiculos', 'tenencias.id_vehiculo','vehiculos.id')
        ->where('tenencias.id', "$id")
        ->get();
        return view('tenencias.edit')->with('valores', $valores)
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
        $valores = tenencias::find($id);
        $valores->tenencia = $request->get('tenencia');
        $valores->pago = $request->get('pago');
        $valores->estatus = $request->get('estatus');
        $valores->nombre = $request->get('nombre');
        $valores->id_vehiculo = $request->get('vehiculo');
        $valores->save();
        return redirect('/tenencia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valores = tenencias::find($id);
        unlink('PDF/'.$valores->archivo);
        $valores->delete();
        return redirect('/tenencia');
    }
}
