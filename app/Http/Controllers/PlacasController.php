<?php

namespace App\Http\Controllers;

use App\Models\Placas;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PlacasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('placas')
        ->select('placas.*', 'vehiculos.marca','vehiculos.serie')
        ->join('vehiculos', 'placas.id_vehiculo','vehiculos.id')
        ->get();
        $valores=Placas::all();
        return view('placas.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selec=Vehiculo::all();
        $prueba=true;
        return view('placas.create')->with('selec', $selec)
        ->with('prueba', $prueba);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $valores = new Placas();
        $valores->vencimiento = $request->get('vencimiento');
        $valores->estatus = $request->get('estatus');
        $valores->nombre = $request->get('nombre');
        $valores->id_vehiculo = $request->get('vehiculo');
        if($archivo= $request->file('archivo')){
            $rutaguardarpdf= 'PDF/';
            $archivonombre= date('YmdHis')."_". $valores->nombre . "." . $archivo->getClientOriginalExtension();
            $archivo->move($rutaguardarpdf, $archivonombre);
            $valores->archivo="$archivonombre";
        }
        $valores->save();
        return redirect('/placa');
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
        $valores=Placas::find($id);
        $datos=DB::table('placas')
        ->join('vehiculos', 'placas.id_vehiculo','vehiculos.id')
        ->where('placas.id', "$id")
        ->get();
        return view('placas.edit')->with('valores', $valores)
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
        $valores = Placas::find($id);
        $valores->vencimiento = $request->get('vencimiento');
        $valores->estatus = $request->get('estatus');
        $valores->nombre = $request->get('nombre');
        $valores->id_vehiculo = $request->get('vehiculo');
        $valores->save();
        return redirect('/placa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valores = Placas::find($id);
        unlink('PDF/'.$valores->archivo);
        $valores->delete();
        return redirect('/placa');
    }
}
