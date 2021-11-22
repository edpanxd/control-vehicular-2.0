<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vehiculo;
use App\Models\vehiculos_i;
use App\Models\vehiculos_n;
use App\Models\fotos_vehiculos;
use App\Models\Placas;
use App\Models\polizas;
use PDF;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actual = new DateTime("now");
        $año = date('Y');
        $final = new DateTime("30-03-$año");
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
            ->with('Fm', $Fm)
            ->with('actual', $actual)
            ->with('año', $año);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($p)
    {
        $data = DB::table("$p" . 's')
            ->select("$p" . 's.*', 'vehiculos.marca', 'vehiculos.serie')
            ->join('vehiculos', "$p" . 's' . '.id_vehiculo', 'vehiculos.id')
            ->where("$p" . 's' . '.estatus', 'vencidas')
            ->get();
        return view("$p" . 's' . ".index")->with('data', $data);
    }
    public function create2($p)
    {
        $data = DB::table("$p" . 's')
            ->select("$p" . 's.*', 'vehiculos.marca', 'vehiculos.serie')
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
            }
        }
        $vi = vehiculos_i::all();
        foreach ($vi as $vi) {
            if ($vi->id_vehiculo == $id) {
                $Vehiculos_T = DB::table('vehiculos_is')->where('id_vehiculo', "$id")->get();
                $estatus = "Importado";
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
        $foto = DB::table('fotos_vehiculos')->where('id_vehiculo', "$id")->get();
        $placa = DB::table('placas')->where('id_vehiculo', "$id")->where('estatus', "VIGENTES")->get();
        $fotos = DB::table('fotos_vehiculos')->where('id_vehiculo', "$id")->get();
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
            ->with('fisico_ms', $fisico_ms)
            ->with('foto', $foto)
            ->with('placa', $placa)
            ->with('fotos', $fotos);
    }
    public function imprimir($id)
    {
        $Vehiculos_T = ["1", "2"];
        $estatus = ["1", "2", "3", "4", "5"];
        $ve = vehiculos_n::all();
        foreach ($ve as $ve) {
            if ($ve->id_vehiculo == $id) {
                $Vehiculos_T = DB::table('vehiculos_ns')->where('id_vehiculo', "$id")->get();
                $estatus = ["1", "2", "3"];
            }
        }
        $vi = vehiculos_i::all();
        foreach ($vi as $vi) {
            if ($vi->id_vehiculo == $id) {
                $Vehiculos_T = DB::table('vehiculos_is')->where('id_vehiculo', "$id")->get();
                $estatus = ["1", "2", "3", "4"];
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
        $empresa = empresa::all();
        $polizas2 = DB::table('polizas')->where('id_vehiculo', "$id")->get();
        $placas2 = DB::table('placas')->where('id_vehiculo', "$id")->get();
        $polizas3 = DB::table('polizas')->where('id_vehiculo', "$id")->get();
        $permisos2 = DB::table('permisos')->where('id_vehiculo', "$id")->get();
        $pdf = PDF::loadView('dashboard.reporte', compact(
            'vehiculo',
            'placas',
            'empresa',
            "Vehiculos_T",
            'tarjetacs',
            'permisos',
            'polizas',
            'estatus',
            'tenencias',
            'verificacion_as',
            'verificacion_bs',
            'verificacion_fs',
            'verificacion_fsa',
            'fisico_ms',
            'polizas2',
            'placas2',
            'polizas3',
            'permisos2'
        ));

        return $pdf->stream('CÉDULA DE CONTROL VEHÍCULAR.pdf');
    }
    public function eliminar($id)
    {
        $valores = fotos_vehiculos::find($id);
        unlink('fotos_vehiculo/' . $valores->fotos);
        $valores->delete();
        return redirect('/dashboardvh' . '/' . $valores->id_vehiculo);
    }

    public function foto(Request $request)
    {
        $valores = new fotos_vehiculos();
        $valores->id_vehiculo = $request->get('id');
        if ($fotos = $request->file('imagen')) {
            $rutaguardarimg = 'fotos_vehiculo/';
            $imagennombre = date('YmdHis') . "." . $fotos->getClientOriginalExtension();
            $fotos->move($rutaguardarimg, $imagennombre);
            $valores->fotos = "$imagennombre";
        }
        $valores->save();
        $id = $request->get('id');
        return redirect('/dashboardvh' . '/' . $id);
    }

    public function eventos()
    {
        $data = array(); //declaramos un array principal que va contener los datos
        $placas = DB::table('placas')
            ->select('placas.*', 'vehiculos.marca', 'vehiculos.serie')
            ->join('vehiculos', 'placas.id_vehiculo', 'vehiculos.id')
            ->get();
        $poliza = DB::table('polizas')
            ->select('polizas.*', 'vehiculos.marca', 'vehiculos.serie')
            ->join('vehiculos', 'polizas.id_vehiculo', 'vehiculos.id')
            ->get();
        $i = 0;
        $title = 'title';
        $start = 'start';
        $color = 'color';
        $descripcion = 'descripcion';

        foreach ($placas as $placas) {
            $newDate = date("Y-m-d", strtotime($placas->baja));
            $data[$i] = array(
                $title => "Placa :" . $placas->placas,
                $start => $newDate,
                $color => 'red',
                $descripcion => 'La placa ' . $placas->placas . ' del vehiculo ' . $placas->marca . ' esta por vencer',
                'url' => 'dashboardvh/' . $placas->id_vehiculo,
            );
            $i++;
        }

        foreach ($poliza as $poliza) {
            $newDato = date("Y-m-d", strtotime($poliza->vencimiento));
            $data[$i] = array(
                $title => "Poliza : " . $poliza->poliza,
                $start => $newDato,
                $color => 'green',
                $descripcion => 'La poliza: ' . $poliza->poliza . ' del vehiculo ' . $poliza->marca . ' esta por vencer',
                'url' => 'dashboardvh/' . $poliza->id_vehiculo,
            );
            $i++;
        }


        return response()->json($data);  //para luego retornarlo y estar listo para consumirlo
    }
}
