<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\documentos_p;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\DB;

class documentos_pController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $valores=DB::table('documentos_ps')
        ->select('documentos_ps.*', 'vehiculos.marca','vehiculos.serie')
        ->join('vehiculos', 'documentos_ps.id_vehiculo','vehiculos.id')
        ->get();
        return view('documentos.index')
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
        return view('documentos.create')->with('selec', $selec);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valores = new documentos_p();
        $valores->comprador = strtoupper($request->get('comprador'));
        $valores->vendedor = strtoupper($request->get('vendedor'));
        $valores->contrato_com = strtoupper($request->get('contrato_com'));
        $valores->carta_res = strtoupper($request->get('carta_res'));
        $valores->identificacion = strtoupper($request->get('identificacion'));
        $valores->informe = strtoupper($request->get('informe'));
        $valores->id_vehiculo = $request->get('vehiculo');
        if($archivo_con= $request->file('archivo_con')){
            $rutaguardarpdf= 'Contrato/';
            $archivonombre= date('YmdHis')."-vehiculo_id=".$valores->id_vehiculo.".". $archivo_con->getClientOriginalExtension();
            $archivo_con->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_con="$archivonombre";
        }else{ $valores->archivo_con="Sin archivo"; }
        if($archivo_car= $request->file('archivo_car')){
            $rutaguardarpdf= 'cartas responsivas/';
            $archivonombre= date('YmdHis')."-vehiculo_id=".$valores->id_vehiculo."." . $archivo_car->getClientOriginalExtension();
            $archivo_car->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_car="$archivonombre";
        }else{ $valores->archivo_car="Sin archivo"; }
        if($archivo_iden= $request->file('archivo_iden')){
            $rutaguardarpdf= 'Identificaciones/';
            $archivonombre= date('YmdHis')."-vehiculo_id=".$valores->id_vehiculo.".".$archivo_iden->getClientOriginalExtension();
            $archivo_iden->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_iden="$archivonombre";
        }else{ $valores->archivo_iden="Sin archivo"; }
        if($archivo_in= $request->file('archivo_in')){
            $rutaguardarpdf= 'Informe repuve/';
            $archivonombre= date('YmdHis')."-vehiculo_id=".$valores->id_vehiculo."." . $archivo_in->getClientOriginalExtension();
            $archivo_in->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_in="$archivonombre";
        }else{ $valores->archivo_in="Sin archivo"; }
        $valores->save();
        return redirect('/documento');
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
        $valores=documentos_p::find($id);
        $datos=DB::table('documentos_ps')
        ->join('vehiculos', 'documentos_ps.id_vehiculo','vehiculos.id')
        ->where('documentos_ps.id', "$id")
        ->get();
        return view('documentos.edit')->with('valores', $valores)
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
        $valores = documentos_p::find($id);
        $valores->comprador = strtoupper($request->get('comprador'));
        $valores->vendedor = strtoupper($request->get('vendedor'));
        $valores->id_vehiculo = $request->get('vehiculo');
        $valores->contrato_com = strtoupper($request->get('contrato_com'));
        $valores->carta_res = strtoupper($request->get('carta_res'));
        $valores->identificacion = strtoupper($request->get('identificacion'));
        $valores->informe = strtoupper($request->get('informe'));
        if($archivo_con= $request->file('archivo_con')){
            if($valores->archivo_con != "Sin archivo"){
                unlink('Contrato/'.$valores->archivo_con);
            }
            $rutaguardarpdf= 'Contrato/';
            $archivonombre= date('YmdHis')."-vehiculo_id=".$valores->id_vehiculo.".". $archivo_con->getClientOriginalExtension();
            $archivo_con->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_con="$archivonombre";
        }
        if($archivo_car= $request->file('archivo_car')){
            if($valores->archivo_car != "Sin archivo"){
                unlink('cartas responsivas/'.$valores->archivo_car);
            }
            $rutaguardarpdf= 'cartas responsivas/';
            $archivonombre= date('YmdHis')."-vehiculo_id=".$valores->id_vehiculo."." . $archivo_car->getClientOriginalExtension();
            $archivo_car->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_car="$archivonombre";
        }
        if($archivo_iden= $request->file('archivo_iden')){
            if($valores->archivo_iden != "Sin archivo"){
                unlink('Identificaciones/'.$valores->archivo_iden);
            }
            $rutaguardarpdf= 'Identificaciones/';
            $archivonombre= date('YmdHis')."-vehiculo_id=".$valores->id_vehiculo.".".$archivo_iden->getClientOriginalExtension();
            $archivo_iden->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_iden="$archivonombre";
        }
        if($archivo_in= $request->file('archivo_in')){
            if($valores->archivo_in != "Sin archivo"){
                unlink('Informe repuve/'.$valores->archivo_in);
            }
            $rutaguardarpdf= 'Informe repuve/';
            $archivonombre= date('YmdHis')."-vehiculo_id=".$valores->id_vehiculo."." . $archivo_in->getClientOriginalExtension();
            $archivo_in->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_in="$archivonombre";
        }
        $valores->save();
        return redirect('/documento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valores = documentos_p::find($id);
        //unlink('Documentos_p/'.$valores->archivo);
        $valores->delete();
        return redirect('/documento')
        ->with('status_success','Eliminado Correctamente');
    }
}
