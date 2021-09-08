<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vehiculo;
use App\Models\vehiculos_i;
use App\Models\vehiculos_n;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valores = Vehiculo::all()->where('estatus', 'Activo');
        $datos = Vehiculo::all();
        $placas = DB::table('placas')->where('placas.estatus', 'vencidas')->get();
        $poliza = DB::table('polizas')->where('polizas.estatus', 'vencidas')->get();
        $tenencia = DB::table('tenencias')->where('tenencias.estatus', 'sin pagar')->get();
        $Va = DB::table('verificacion_as')->where('verificacion_as.estatus', 'sin pagar')->get();
        $Vb = DB::table('verificacion_bs')->where('verificacion_bs.estatus', 'sin pagar')->get();
        $Vf = DB::table('verificacion_fs')->where('verificacion_fs.estatus', 'sin pagar')->get();
        $Fm = DB::table('fisico_ms')->where('fisico_ms.estatus', 'sin pagar')->get();
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
    public function create($p)
    {
        $data = DB::table("$p" . 's')
            ->select("$p" . 's.*', 'vehiculos.marca', 'vehiculos.placas')
            ->join('vehiculos', "$p" . 's' . '.id_vehiculo', 'vehiculos.id')
            ->where("$p" . 's' . '.estatus', 'vencidas')
            ->get();
        return view("$p" . 's' . ".index")->with('data', $data);
    }
    public function create2($p)
    {
        $data = DB::table("$p" . 's')
            ->select("$p" . 's.*', 'vehiculos.marca', 'vehiculos.placas')
            ->join('vehiculos', "$p" . 's' . '.id_vehiculo', 'vehiculos.id')
            ->where("$p" . 's' . '.estatus', 'sin pagar')
            ->get();
        if ($p == 'tenencia') {
            return view("$p" . 's' . ".index")->with('data', $data);
        } else {
            return view("$p" . ".index")->with('data', $data);
        }
    }

    public function perfil($id)
    {
        $Vehiculos_T = "F";
        $estatus = "Sin datos";
        $ve = vehiculos_n::all();
        foreach ($ve as $ve) {
            if ($ve->id_vehiculo == $id) {
                $Vehiculos_T = DB::table('vehiculos_ns')->where('id_vehiculo', "$id")->get();
                $estatus = "Nacional";
            } else {
                $vi = vehiculos_i::all();
                foreach ($vi as $vi) {
                    if ($vi->id_vehiculo == $id) {
                        $Vehiculos_T = DB::table('vehiculos_is')->where('id_vehiculo', "$id")->get();
                        $estatus = "Importado";
                    }
                }
            }
        }


        $vehiculo = Vehiculo::all()->where('id', "$id");
        $documentos = DB::table('documentos_ps')->where('id_vehiculo', "$id")->get();
        $placas = DB::table('placas')->where('id_vehiculo', "$id")->get();
        $tarjetacs = DB::table('tarjetacs')->where('id_vehiculo', "$id")->get();
        $polizas = DB::table('polizas')->where('id_vehiculo', "$id")->get();
        $tenencias = DB::table('tenencias')->where('id_vehiculo', "$id")->get();
        $verificacion_as = DB::table('verificacion_as')->where('id_vehiculo', "$id")->get();
        $verificacion_bs = DB::table('verificacion_bs')->where('id_vehiculo', "$id")->get();
        $verificacion_fs = DB::table('verificacion_fs')->where('id_vehiculo', "$id")->get();
        $verificacion_fsa = DB::table('verificacion_f2s')->where('id_vehiculo', "$id")->get();
        $permisos = DB::table('permisos')->where('id_vehiculo', "$id")->get();
        $propietarios_as = DB::table('propietarios_as')->where('id_vehiculo', "$id")->get();
        $fisico_ms = DB::table('fisico_ms')->where('id_vehiculo', "$id")->get();
        return view('dashboard.perfil')->with('vehiculo', $vehiculo)
            ->with('placas', $placas)
            ->with('tarjetacs', $tarjetacs)
            ->with('polizas', $polizas)
            ->with('tenencias', $tenencias)
            ->with('verificacion_as', $verificacion_as)
            ->with('verificacion_bs', $verificacion_bs)
            ->with('verificacion_fs', $verificacion_fs)
            ->with('verificacion_fsa', $verificacion_fsa)
            ->with('permisos', $permisos)
            ->with('propietarios_as', $propietarios_as)
            ->with('documentos', $documentos)
            ->with('Vehiculos_T', $Vehiculos_T)
            ->with('estatus', $estatus)
            ->with('fisico_ms', $fisico_ms);
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
