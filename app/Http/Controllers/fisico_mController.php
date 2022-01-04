<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vehiculo;
use App\Models\fisico_m;
use App\Models\Placas;
use JeroenNoten\LaravelAdminLte\Components\Form\Select2;

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
        ->select('fisico_ms.*', 'vehiculos.marca','vehiculos.serie')
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
        $selec2 = Placas::all();
        $selec = Vehiculo::all();
        return view('fisico_m.create')->with('selec', $selec)
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
        $valores = new fisico_m();
        $valores->placa = $request->get('placa');
        $valores->verificacion = $request->get('verificacion');
        $valores->terminacion = $request->get('terminacion');
        $valores->fecha_pago = $request->get('fecha_pago');
        $valores->fecha_estimada = $request->get('fecha_estimada');
        $valores->monto = $request->get('monto');
        $valores->estatus = $request->get('estatus');
        $valores->id_vehiculo = $request->get('vehiculo');
        if($archivo= $request->file('archivo')){
            $rutaguardarpdf= 'fisico mecanico/';
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
        $selec2 = Placas::all();
        $selec=Vehiculo::all();
        $valores=fisico_m::find($id);
        $datos=DB::table('fisico_ms')
        ->join('vehiculos', 'fisico_ms.id_vehiculo','vehiculos.id')
        ->where('fisico_ms.id', "$id")
        ->get();
        return view('fisico_m.edit')->with('valores', $valores)
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
        $valores = fisico_m::find($id);
        $valores->verificacion = $request->get('verificacion');
        $valores->terminacion = $request->get('terminacion');
        $valores->fecha_pago = $request->get('fecha_pago');
        $valores->fecha_estimada = $request->get('fecha_estimada');
        $valores->monto = $request->get('monto');
        $valores->estatus = $request->get('estatus');
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
        unlink('fisico mecanico/'.$valores->archivo);
        $valores->delete();
        return redirect('/fisico_m')
        ->with('status_success','Eliminado Correctamente');
    }
}
