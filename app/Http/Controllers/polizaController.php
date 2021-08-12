<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Models\polizas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class polizaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('polizas')
        ->select('polizas.*', 'vehiculos.marca','vehiculos.placas')
        ->join('vehiculos', 'polizas.id_vehiculo','vehiculos.id')
        ->get();
        $valores=polizas::all();
        return view('polizas.index')->with('data', $data);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selec = Vehiculo::all();
        return view('polizas.create')->with('selec', $selec);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valores = new polizas();
        $valores->poliza = $request->get('poliza');
        $valores->seguro = $request->get('seguro');
        $valores->vigencia = $request->get('vigencia');
        $valores->nombre = $request->get('nombre');
        $valores->id_vehiculo = $request->get('vehiculo');
        if($archivo= $request->file('archivo')){
            $rutaguardarpdf= 'PDF/';
            $archivonombre= date('YmdHis'). "." . $archivo->getClientOriginalExtension();
            $archivo->move($rutaguardarpdf, $archivonombre);
            $valores->archivo="$archivonombre";
        }
        $valores->save();
        return redirect('/poliza');
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
        $valores=polizas::find($id);
        $datos=DB::table('polizas')
        ->join('vehiculos', 'polizas.id_vehiculo','vehiculos.id')
        ->where('polizas.id', "$id")
        ->get();
        return view('polizas.edit')->with('valores', $valores)
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
        $valores = polizas::find($id);
        $valores->poliza = $request->get('poliza');
        $valores->seguro = $request->get('seguro');
        $valores->vigencia = $request->get('vigencia');
        $valores->nombre = $request->get('nombre');
        $valores->id_vehiculo = $request->get('vehiculo');
        $valores->save();
        return redirect('/poliza');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valores = polizas::find($id);
        unlink('PDF/'.$valores->archivo);
        $valores->delete();
        return redirect('/poliza');
    }
}
