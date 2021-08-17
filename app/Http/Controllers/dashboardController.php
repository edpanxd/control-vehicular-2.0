<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vehiculo;
use App\Models\Placas;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $valores= Vehiculo::all();
       $datos= Vehiculo::all();
       $placas= DB::table('placas')
       ->where('placas.estatus', 'vencidas')
       ->get();
       $poliza= DB::table('polizas')
       ->where('polizas.estatus', 'vencidas')
       ->get();
       $tenencia= DB::table('tenencias')
       ->where('tenencias.estatus', 'sin pagar')
       ->get();
       $Va= DB::table('verificacion_as')
       ->where('verificacion_as.estatus', 'sin pagar')
       ->get();
       $Vb= DB::table('verificacion_bs')
       ->where('verificacion_bs.estatus', 'sin pagar')
       ->get();
       $Vf= DB::table('verificacion_fs')
       ->where('verificacion_fs.estatus', 'sin pagar')
       ->get();
       $Fm= DB::table('fisico_ms')
       ->where('fisico_ms.estatus', 'sin pagar')
       ->get();
        return view('dashboard.index')->with('valores', $valores)
        ->with('datos', $datos)
        ->with('placas', $placas)
        ->with('poliza', $poliza)
        ->with('tenencia', $tenencia)
        ->with('Va', $Va)
        ->with('Vb', $Vb)
        ->with('Vf', $Vf)
        ->with('Fm', $Fm);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
