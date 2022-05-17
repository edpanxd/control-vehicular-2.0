<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valores=Vehiculo::all();
        
        return view('Vehiculos.index')->with('valores', $valores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresa=empresa::all();
        $localidad=DB::table('localidad')
        ->select('localidad.*')
        ->get();
        return view('vehiculos.create') 
        ->with('empresa', $empresa)
        ->with('localidad', $localidad);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valores = new Vehiculo();
        $valores->marca = strtoupper($request->get('marca'));
        $valores->submarca = strtoupper($request->get('submarca'));
        $valores->tipo = strtoupper($request->get('tipo'));
        $valores->modelo = strtoupper($request->get('modelo'));
        $valores->color = strtoupper($request->get('color'));
        $valores->serie = strtoupper($request->get('serie'));
        $valores->numeroM = strtoupper($request->get('numeroM'));
        $valores->estatus = strtoupper($request->get('estatus'));
        $valores->uso = strtoupper($request->get('uso'));
        $valores->nombre_p =strtoupper($request->get('nombre_p'));
        $valores->adquisicion = strtoupper($request->get('adquisicion'));
        $valores->empresa = strtoupper($request->get('empresa'));
        $valores->localidad = strtoupper($request->get('localidad'));
        if($imagen= $request->file('imagen')){
            $rutaguardarimg= 'imagen/';
            $imagennombre= date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaguardarimg, $imagennombre);
            $valores->imagen="$imagennombre";
        }
        $valores->save();
        return redirect('/vehiculo');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $valores=Vehiculo::find($id);
        $empresa=empresa::all();
        $localidad=DB::table('localidad')
        ->select('localidad.*')
        ->get();
        return view('vehiculos.edit')->with('valores', $valores)
        ->with('empresa', $empresa)
        ->with('localidad', $localidad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valores = Vehiculo::find($id);
        $valores->marca = strtoupper($request->get('marca'));
        $valores->submarca = strtoupper($request->get('submarca'));
        $valores->tipo = strtoupper($request->get('tipo'));
        $valores->modelo = strtoupper($request->get('modelo'));
        $valores->color = strtoupper($request->get('color'));
        $valores->serie = strtoupper($request->get('serie'));
        $valores->numeroM = strtoupper($request->get('numeroM'));
        $valores->estatus = strtoupper($request->get('estatus'));
        $valores->uso = strtoupper($request->get('uso'));
        $valores->nombre_p =strtoupper($request->get('nombre_p'));
        $valores->adquisicion = strtoupper($request->get('adquisicion'));
        $valores->empresa = strtoupper($request->get('empresa'));
        $valores->localidad = strtoupper($request->get('localidad'));

        if($imagen= $request->file('imagen')){
            if($valores->imagen != ""){
                unlink('imagen/'.$valores->imagen);
            }
            $rutaguardarimg= 'imagen/';
            $imagennombre= date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaguardarimg, $imagennombre);
            $valores->imagen="$imagennombre";
        }

        $valores->save();
        return redirect('/vehiculo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehiculo $vehiculo, $id)
    {
        $valores = Vehiculo::find($id);
        $valores->delete();
        if($valores){
            unlink('imagen/'.$valores->imagen);
            return redirect('/vehiculo');
        }
        
    }
}
