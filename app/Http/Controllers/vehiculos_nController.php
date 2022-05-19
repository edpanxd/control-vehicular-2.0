<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use App\Models\vehiculos_n;
use Illuminate\Support\Facades\DB;

class vehiculos_nController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valores = vehiculos_n::all();
        return view('vehiculosn.index')
        ->with('valores', $valores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $selec = Vehiculo::all();
        return view('vehiculosn.create')->with('selec', $selec);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valores = new vehiculos_n();
        $valores->no_factura = strtoupper($request->get('no_factura'));
        $valores->refactura = strtoupper($request->get('refactura'));
        $valores->carta_fa = strtoupper($request->get('carta_fa'));
        $valores->id_vehiculo = $request->get('vehiculo');
        if($archivo_fa= $request->file('archivo_fa')){
            $rutaguardarpdf= 'Factura/';
            $archivonombre= date('YmdHis')."-".$valores->id_vehiculo."." . $archivo_fa->getClientOriginalExtension();
            $archivo_fa->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_fa="$archivonombre";
        }else{ $valores->archivo_fa="Sin archivo"; }
        if($archivo_refa= $request->file('archivo_refa')){
            $rutaguardarpdf= 'Refactura/';
            $archivonombre= date('YmdHis')."-".$valores->id_vehiculo. "." . $archivo_refa->getClientOriginalExtension();
            $archivo_refa->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_refa="$archivonombre";
        }else{ $valores->archivo_refa="Sin archivo"; }
        if($archivo_car= $request->file('archivo_car')){
            $rutaguardarpdf= 'Carta factura/';
            $archivonombre= date('YmdHis')."-".$valores->id_vehiculo. "." . $archivo_car->getClientOriginalExtension();
            $archivo_car->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_car="$archivonombre";
        }else{ $valores->archivo_car="Sin archivo"; }
        $valores->save();
        return redirect('/vehiculon');
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
        $valores=vehiculos_n::find($id);
        $datos=DB::table('vehiculos_ns')
        ->join('vehiculos', 'vehiculos_ns.id_vehiculo','vehiculos.id')
        ->where('vehiculos_ns.id', "$id")
        ->get();
        return view('vehiculosn.edit')->with('valores', $valores)
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
        $valores = vehiculos_n::find($id);
        $valores->no_factura = strtoupper($request->get('no_factura'));
        $valores->refactura = strtoupper($request->get('refactura'));
        $valores->carta_fa = strtoupper($request->get('carta_fa'));
        $valores->id_vehiculo = $request->get('vehiculo');
        if($archivo_fa= $request->file('archivo_fa')){
            if($valores->archivo_fa != "Sin archivo"){
                unlink('Factura/'.$valores->archivo_fa);
            }
            $rutaguardarpdf= 'Factura/';
            $archivonombre= date('YmdHis')."-".$valores->id_vehiculo."." . $archivo_fa->getClientOriginalExtension();
            $archivo_fa->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_fa="$archivonombre";
        }
        if($archivo_refa= $request->file('archivo_refa')){
            if($valores->archivo_refa != "Sin archivo"){
                unlink('Refactura/'.$valores->archivo_refa);
            }
            $rutaguardarpdf= 'Refactura/';
            $archivonombre= date('YmdHis')."-".$valores->id_vehiculo. "." . $archivo_refa->getClientOriginalExtension();
            $archivo_refa->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_refa="$archivonombre";
        }
        if($archivo_car= $request->file('archivo_car')){
            if($valores->archivo_car != "Sin archivo"){
                unlink('Carta factura/'.$valores->archivo_car);
            }
            $rutaguardarpdf= 'Carta factura/';
            $archivonombre= date('YmdHis')."-".$valores->id_vehiculo. "." . $archivo_car->getClientOriginalExtension();
            $archivo_car->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_car="$archivonombre";
        }
        $valores->save();
        return redirect('/vehiculon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valores = vehiculos_n::find($id);
        $valores->delete();
        return redirect('/vehiculon')
        ->with('status_success','Eliminado Correctamente');
    }
}
