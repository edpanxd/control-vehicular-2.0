<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehiculos_i;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\DB;

class vehiculos_iController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $valores=DB::table('vehiculos_is')
        ->select('vehiculos_is.*', 'vehiculos.marca','vehiculos.serie')
        ->join('vehiculos', 'vehiculos_is.id_vehiculo','vehiculos.id')
        ->get();
        return view('vehiculosi.index')
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
        return view('vehiculosi.create')->with('selec', $selec);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valores = new vehiculos_i();
        $valores->no_factura = strtoupper($request->get('no_factura'));
        $valores->pedimiento = strtoupper($request->get('pedimiento'));
        $valores->titulo_pro = strtoupper($request->get('titulo_pro'));
        $valores->id_vehiculo = $request->get('vehiculo');
        if($archivo_fa= $request->file('archivo_fa')){
            $rutaguardarpdf= 'Facturas/';
            $archivonombre= date('YmdHis')."-".$valores->id_vehiculo. "." . $archivo_fa->getClientOriginalExtension();
            $archivo_fa->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_fa="$archivonombre";
        }else{ $valores->archivo_fa="Sin archivo"; }
        if($archivo_pe= $request->file('archivo_pe')){
            $rutaguardarpdf= 'Pedimento/';
            $archivonombre= date('YmdHis')."-".$valores->id_vehiculo."." . $archivo_pe->getClientOriginalExtension();
            $archivo_pe->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_pe="$archivonombre";
        }else{ $valores->archivo_pe="Sin archivo"; }
        if($archivo_titu= $request->file('archivo_titu')){
            $rutaguardarpdf= 'Titulos propietario/';
            $archivonombre= date('YmdHis')."-".$valores->id_vehiculo. "." . $archivo_titu->getClientOriginalExtension();
            $archivo_titu->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_titu="$archivonombre";
        }else{ $valores->archivo_titu="Sin archivo"; }
        $valores->save();
        return redirect('/vehiculoi');
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
        $valores=vehiculos_i::find($id);
        $datos=DB::table('vehiculos_is')
        ->join('vehiculos', 'vehiculos_is.id_vehiculo','vehiculos.id')
        ->where('vehiculos_is.id', "$id")
        ->get();
        return view('vehiculosi.edit')->with('valores', $valores)
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
        $valores = vehiculos_i::find($id);
        $valores->no_factura = strtoupper($request->get('no_factura'));
        $valores->pedimiento = strtoupper($request->get('pedimiento'));
        $valores->titulo_pro = strtoupper($request->get('titulo_pro'));
        $valores->id_vehiculo = $request->get('vehiculo');
        if($archivo_fa= $request->file('archivo_fa')){
            if($valores->archivo_fa != "Sin archivo"){
                unlink('Facturas/'.$valores->archivo_fa);
            }
            $rutaguardarpdf= 'Facturas/';
            $archivonombre= date('YmdHis')."-".$valores->id_vehiculo. "." . $archivo_fa->getClientOriginalExtension();
            $archivo_fa->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_fa="$archivonombre";
        }
        if($archivo_pe= $request->file('archivo_pe')){
            if($valores->archivo_pe != "Sin archivo"){
                unlink('Pedimento/'.$valores->archivo_pe);
            }
            $rutaguardarpdf= 'Pedimento/';
            $archivonombre= date('YmdHis')."-".$valores->id_vehiculo."." . $archivo_pe->getClientOriginalExtension();
            $archivo_pe->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_pe="$archivonombre";
        }
        if($archivo_titu= $request->file('archivo_titu')){
            if($valores->archivo_titu != "Sin archivo"){
                unlink('Titulos propietario/'.$valores->archivo_titu);
            }
            $rutaguardarpdf= 'Titulos propietario/';
            $archivonombre= date('YmdHis')."-".$valores->id_vehiculo. "." . $archivo_titu->getClientOriginalExtension();
            $archivo_titu->move($rutaguardarpdf, $archivonombre);
            $valores->archivo_titu="$archivonombre";
        }
        $valores->save();
        return redirect('/vehiculoi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valores = vehiculos_i::find($id);
        $valores->delete();
        return redirect('/vehiculoi')
        ->with('status_success','Eliminado Correctamente');
    }
}
