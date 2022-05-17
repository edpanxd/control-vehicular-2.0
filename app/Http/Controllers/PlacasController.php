<?php

namespace App\Http\Controllers;

use App\Models\Placas;
use App\Models\Vehiculo;
use Hamcrest\SelfDescribing;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Monolog\Handler\IFTTTHandler;
use Illuminate\Validation\Rule;


class PlacasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('placas')
            ->select('placas.*', 'vehiculos.marca', 'vehiculos.serie')
            ->join('vehiculos', 'placas.id_vehiculo', 'vehiculos.id')
            ->get();
        $error = 0;
        return view('placas.index')->with('data', $data)->with('error', $error);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selec = Vehiculo::all();
        $prueba = true;
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
        if ($request->get('estatus') == "VIGENTES") {
            $consulta = Placas::all()->where("id_vehiculo", $request->get('vehiculo'))->where('estatus', 'VIGENTES');
            if (count($consulta)) {
                $error = 1;
                $data = DB::table('placas')
                    ->select('placas.*', 'vehiculos.marca', 'vehiculos.serie')
                    ->join('vehiculos', 'placas.id_vehiculo', 'vehiculos.id')
                    ->get();
                return view('placas.index')->with('data', $data)->with('error', $error);
            } else {
                $guardar = self::guardar($request);
                return redirect('/placa');
            }
        } else {

            $guardar = self::guardar($request);
            return redirect('/placa');
        }
    }
    public function guardar($request)
    {
        $valores = new Placas();
        $valores->placas = $request->get('placas');
        $valores->entidad = $request->get('entidad');
        $valores->vencimiento = $request->get('vencimiento');
        $valores->alta = $request->get('alta');
        $valores->baja = $request->get('baja');
        $valores->fecha_pago = $request->get('fecha_pago');
        $valores->fecha_estimada = $request->get('fecha_estimada');
        $valores->monto = $request->get('monto');
        $valores->año = $request->get('año');
        $valores->estatus = $request->get('estatus');
        $valores->cambio_propietario = $request->get('cambio_propietario');
        $valores->fecha_cambio_p = $request->get('fecha_cambio_p');
        $valores->observaciones = strtoupper($request->get('observaciones'));
        $valores->id_vehiculo = $request->get('vehiculo');
        if ($archivo = $request->file('archivo')) {
            $rutaguardarpdf = 'Placas/';
            $archivonombre = date('YmdHis') . "_" . $valores->placas . "." . $archivo->getClientOriginalExtension();
            $archivo->move($rutaguardarpdf, $archivonombre);
            $valores->archivo = "$archivonombre";
        } else {
            $valores->archivo = "Sin archivo";
        }
        $valores->save();
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
        $selec = Vehiculo::all();
        $valores = Placas::find($id);
        $datos = DB::table('placas')
            ->join('vehiculos', 'placas.id_vehiculo', 'vehiculos.id')
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
        $valores->placas = $request->get('placas');
        $valores->entidad = $request->get('entidad');
        $valores->vencimiento = $request->get('vencimiento');
        $valores->alta = $request->get('alta');
        $valores->baja = $request->get('baja');
        $valores->monto = $request->get('monto');
        $valores->año = $request->get('año');
        $valores->estatus = $request->get('estatus');
        $valores->cambio_propietario = $request->get('cambio_propietario');
        $valores->fecha_cambio_p = $request->get('fecha_cambio_p');
        $valores->observaciones = strtoupper($request->get('observaciones'));
        $valores->id_vehiculo = $request->get('vehiculo');
        if ($archivo = $request->file('archivo')) {
            if ($valores->archivo != "Sin archivo") {
                unlink('Placas/' . $valores->archivo);
            }
            $rutaguardarpdf = 'Placas/';
            $archivonombre = date('YmdHis') . "_" . $valores->placas . "." . $archivo->getClientOriginalExtension();
            $archivo->move($rutaguardarpdf, $archivonombre);
            $valores->archivo = "$archivonombre";
        }
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
        if ($valores->archivo != "Sin Archivo") {
            $valores->delete();
        } else {
            unlink('Placas/' . $valores->archivo);
            $valores->delete();
        }

        return redirect('/placa');
    }
}
