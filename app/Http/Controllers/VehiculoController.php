<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use App\Models\Vehiculo;
use Illuminate\Http\Request;


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
        return view('vehiculos.create') ->with('empresa', $empresa);
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
        $valores->marca = $request->get('marca');
        $valores->submarca = $request->get('submarca');
        $valores->tipo = $request->get('tipo');
        $valores->modelo = $request->get('modelo');
        $valores->color = $request->get('color');
        $valores->serie = $request->get('serie');
        $valores->numeroM = $request->get('numeroM');
        $valores->estatus = $request->get('estatus');
        $valores->uso = $request->get('uso');
        $valores->nombre_p =$request->get('nombre_p');
        $valores->adquisicion = $request->get('adquisicion');
        $valores->empresa = $request->get('empresa');
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
        return view('vehiculos.edit')->with('valores', $valores)
        ->with('empresa', $empresa);
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
        $valores->marca = $request->get('marca');
        $valores->submarca = $request->get('submarca');
        $valores->tipo = $request->get('tipo');
        $valores->modelo = $request->get('modelo');
        $valores->color = $request->get('color');
        $valores->serie = $request->get('serie');
        $valores->numeroM = $request->get('numeroM');
        $valores->estatus = $request->get('estatus');
        $valores->uso = $request->get('uso');
        $valores->nombre_p =$request->get('nombre_p');
        $valores->adquisicion = $request->get('adquisicion');
        $valores->empresa = $request->get('empresa');
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
