<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ficha_tecnica;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\DB;

class ficha_tecnicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valores = DB::table('ficha_tecnicas')
        ->select('ficha_tecnicas.*', 'vehiculos.marca','vehiculos.serie')
        ->join('vehiculos', 'ficha_tecnicas.id_vehiculo','vehiculos.id')
        ->get();
        return view('ficha_tecnica.index')
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
        return view('ficha_tecnica.create')->with('selec', $selec);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valores = new ficha_tecnica();
        if ($valores->rendimientoConbustible=$request->get('rendimientoConbustible')) {
            $valores->rendimientoConbustible=$request->get('rendimientoConbustible');
        }
        else{
            $valores->rendimientoConbustible= 0.00;
        }
        if ($valores->CapacidadCaja=$request->get('CapacidadCaja')) {
            $valores->CapacidadCaja=$request->get('CapacidadCaja');
        }else{
            $valores->CapacidadCaja= 0.00;
        }
        if ($valores->LargoCaja=$request->get('LargoCaja')) {
            $valores->LargoCaja=$request->get('LargoCaja');
        }else{
            $valores->LargoCaja= 0.00;
        }
        if ( $valores->AnchoCaja=$request->get('AnchoCaja')) {
            $valores->AnchoCaja=$request->get('AnchoCaja');
        }else{
            $valores->AnchoCaja=0.00;
        }
        if ($valores->AltoCaja=$request->get('AltoCaja')) {
            $valores->AltoCaja=$request->get('AltoCaja');
        }else{
            $valores->AltoCaja=0.00;                                                                                                                                                                                                                                                                                                                                                                                                                                
        }
        $valores->id_vehiculo=$request->get('vehiculo');
        $valores->save();
        return redirect('/ficha_tecnica');
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
        $valores=ficha_tecnica::find($id);
        $datos=DB::table('ficha_tecnicas')
        ->join('vehiculos', 'ficha_tecnicas.id_vehiculo','vehiculos.id')
        ->where('ficha_tecnicas.id', "$id")
        ->get();
        return view('ficha_tecnica.edit')->with('valores', $valores)
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
        $valores = ficha_tecnica::find($id);
        $valores->rendimientoConbustible=$request->get('rendimientoConbustible');
        $valores->CapacidadCaja=$request->get('CapacidadCaja');
        $valores->LargoCaja=$request->get('LargoCaja');
        $valores->AnchoCaja=$request->get('AnchoCaja');
        $valores->AltoCaja=$request->get('AltoCaja');
        $valores->id_vehiculo=$request->get('vehiculo');
        $valores->save();
        
        return redirect('/ficha_tecnica');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valores = ficha_tecnica::find($id);
        $valores->delete();
        return redirect('/ficha_tecnica');
       
    }
}
