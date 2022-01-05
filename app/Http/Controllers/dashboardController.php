<?php
namespace App\Http\Controllers;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\empresa;
use App\Models\Vehiculo;
use App\Models\vehiculos_i;
use App\Models\vehiculos_n;
use App\Models\fotos_vehiculos;
use App\Models\Placas;
use App\Models\polizas;
use App\Models\tenencias;
use App\Models\Verificacion_a;
use App\Models\Verificacion_b;
use App\Models\verificacion_f;
use App\Models\verificacion_f2;
use App\Models\fisico_m;
use App\Models\tarjetac;
use App\Models\permisos;
use Barryvdh\DomPDF\Facade as PDF;


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
        $valores = Vehiculo::all()->where('estatus', 'Activo');
        $empresas =  empresa::all();
        //suma por año     
        $tablas = ["polizas", "tenencias", "verificacion_as", "verificacion_bs", "verificacion_fs", "verificacion_f2s", "fisico_ms", "placas", "tarjetacs"];
        $sumaA = [];
        $añoE = 2016;
        $b = 0;
        while ($añoE <= $año) {
            $a = 0;
            $añosumado = 0;
            while ($a <= 8) {
                $anualP = DB::table($tablas[$a])->whereYear('fecha_pago', $añoE)->sum('monto');
                $añosumado = $añosumado + $anualP;
                $a = $a + 1;
            }
            $sumaA[$b] = "Año: $añoE"."\n $$añosumado";
            $añoE = $añoE + 1;
            $b = $b + 1;
        }
        //datos para grafica anuales
        $anualT = tenencias::whereYear('fecha_pago', $año )->sum('monto');
        $anualP = polizas::whereYear('fecha_pago', $año )->sum('monto');
        $anualVe1 = Verificacion_a::whereYear('fecha_pago', $año )->sum('monto');
        $anualVe2 = Verificacion_b::whereYear('fecha_pago', $año )->sum('monto');
        $anualVf1 = verificacion_f::whereYear('fecha_pago', $año )->sum('monto');
        $anualVf2 = verificacion_f2::whereYear('fecha_pago', $año )->sum('monto');
        $anualF = fisico_m::whereYear('fecha_pago', $año )->sum('monto');
        $anualPla = Placas::whereYear('fecha_pago', $año )->sum('monto');
        $anualTa = tarjetac::whereYear('fecha_pago', $año )->sum('monto');
        $anualVe = $anualVe1+$anualVe2;
        $anualVf =  $anualVf1+$anualVf2;
        $graficaaño = [$anualT, $anualP, $anualVe, $anualVf, $anualF, $anualPla, $anualTa];
        //datos para grafica mensuales
        $TenenciaM = [];
        $c = 0;
        $m = 1;
        while ($m <= 12) {
            $data = tenencias::whereMonth('fecha_pago', $m)->whereYear('fecha_pago', $año )->sum('monto');
            $TenenciaM[$c] = $data;
            $m = $m + 1;
            $c = $c + 1;
        }
        $PolizaM = [];
        $c = 0;
        $m = 1;
        while ($m <= 12) {
            $data = polizas::whereMonth('fecha_pago', $m)->whereYear('fecha_pago', $año )->sum('monto');
            $PolizaM[$c] = $data;
            $m = $m + 1;
            $c = $c + 1;
        }
        $VerificacionM = [];
        $c = 0;
        $m = 1;
        while ($m <= 12) {
            if ($m <= 6) {
                $data = Verificacion_a::whereMonth('fecha_pago', $m)->whereYear('fecha_pago', $año )->sum('monto');
                $VerificacionM[$c] = $data;
            }else{
                $data = Verificacion_b::whereMonth('fecha_pago', $m)->whereYear('fecha_pago', $año )->sum('monto');
                $VerificacionM[$c] = $data;
            }
            
            $m = $m + 1;
            $c = $c + 1;
        }
        $VeridicacionFM = [];
        $c = 0;
        $m = 1;
        while ($m <= 12) {
            if ($m <= 6) {
                $data = verificacion_f::whereMonth('fecha_pago', $m)->whereYear('fecha_pago', $año )->sum('monto');
                $VeridicacionFM[$c] = $data;
            }else{
                $data = verificacion_f2::whereMonth('fecha_pago', $m)->whereYear('fecha_pago', $año )->sum('monto');
                $VeridicacionFM[$c] = $data;
            }
            
            $m = $m + 1;
            $c = $c + 1;
        }
        $FisicoM = [];
        $c = 0;
        $m = 1;
        while ($m <= 12) {
            $data = fisico_m::whereMonth('fecha_pago', $m)->whereYear('fecha_pago', $año )->sum('monto');
            $FisicoM[$c] = $data;
            $m = $m + 1;
            $c = $c + 1;
        }
      /*  $PermisoM = [];
        $c = 0;
        $m = 1;
        while ($m <= 12) {
            $data = permisos::whereMonth('fecha_pago', $m)->whereYear('fecha_pago', $año )->sum('monto');
            $PermisoM[$c] = $data;
            $m = $m + 1;
            $c = $c + 1;
        }*/
        $PlacasM = [];
        $c = 0;
        $m = 1;
        while ($m <= 12) {
            $data = Placas::whereMonth('fecha_pago', $m)->whereYear('fecha_pago', $año )->sum('monto');
            $PlacasM[$c] = $data;
            $m = $m + 1;
            $c = $c + 1;
        }
        $TarjetasM = [];
        $c = 0;
        $m = 1;
        while ($m <= 12) {
            $data = tarjetac::whereMonth('fecha_pago', $m)->whereYear('fecha_pago', $año )->sum('monto');
            $TarjetasM[$c] = $data;
            $m = $m + 1;
            $c = $c + 1;
        }
        //Creacion de tarjetas
        $placas = DB::table('placas')->where('placas.estatus', 'vencidas')->get();
        $poliza = DB::table('polizas')->where('polizas.estatus', 'vencidas')->get();
        $tenencia = DB::table('tenencias')->where('tenencias.estatus', 'sin pagar')->get();
        $Va = DB::table('verificacion_as')->where('verificacion_as.estatus', 'sin pagar')->get();
        $Vb = DB::table('verificacion_bs')->where('verificacion_bs.estatus', 'sin pagar')->get();
        $Vf = DB::table('verificacion_fs')->where('verificacion_fs.estatus', 'sin pagar')->get();
        $Fm = DB::table('fisico_ms')->where('fisico_ms.estatus', 'sin pagar')->get();
        return view('dashboard.index')
            ->with('PolizaM', $PolizaM)
            ->with('TenenciaM', $TenenciaM)
            ->with('VerificacionM', $VerificacionM)
            ->with('VeridicacionFM', $VeridicacionFM)
            ->with('FisicoM', $FisicoM)/*->with('PermisoM', $PermisoM)*/
            ->with('PlacasM', $PlacasM)
            ->with('graficaaño', $graficaaño)
            ->with('sumaA',$sumaA)
            ->with('TarjetasM', $TarjetasM)
            ->with('valores', $valores)
            ->with('placas', $placas)
            ->with('poliza', $poliza)
            ->with('tenencia', $tenencia)
            ->with('Va', $Va)
            ->with('Vb', $Vb)
            ->with('Vf', $Vf)
            ->with('Fm', $Fm)
            ->with('actual', $actual)
            ->with('año', $año)
            ->with('empresas', $empresas);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vehiculos()
    {
        $datos = Vehiculo::all();
        return view('dashboard.tarjetas')
            ->with('datos', $datos);
    }
    public function vehiculoE($p)
    {
        $datos = Vehiculo::all()->where('empresa', $p);
        return view('dashboard.tarjetas')->with('datos', $datos);
    }
    public function create($p)
    {
        $data = DB::table("$p" . 's')
            ->select("$p" . 's.*', 'vehiculos.marca', 'vehiculos.serie')
            ->join('vehiculos', "$p" . 's' . '.id_vehiculo', 'vehiculos.id')
            ->where("$p" . 's' . '.estatus', 'vencidas')
            ->get();
        return view("$p" . 's' . ".index")->with('data', $data);
    }
    public function verificacion($p)
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
        $fichatecnica = DB::table('ficha_tecnicas')->where('id_vehiculo', "$id")->get();
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
            'permisos2',
            'fichatecnica'
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
            ->where('año', '>', 2019)
            ->get();
        $poliza = DB::table('polizas')
            ->select('polizas.*', 'vehiculos.marca', 'vehiculos.serie')
            ->join('vehiculos', 'polizas.id_vehiculo', 'vehiculos.id')
            ->where('año', '>', 2019)
            ->get();
        $verificacion_e1 = DB::table('verificacion_as')
            ->select('verificacion_as.*', 'vehiculos.marca', 'vehiculos.serie')
            ->join('vehiculos', 'verificacion_as.id_vehiculo', 'vehiculos.id')
            ->where('verificacion', '>', 2019)
            ->get();
        $verificacion_e2 = DB::table('verificacion_bs')
            ->select('verificacion_bs.*', 'vehiculos.marca', 'vehiculos.serie')
            ->join('vehiculos', 'verificacion_bs.id_vehiculo', 'vehiculos.id')
            ->where('verificacion', '>', 2019)
            ->get();
        $verificacion_f = DB::table('verificacion_fs')
            ->select('verificacion_fs.*', 'vehiculos.marca', 'vehiculos.serie')
            ->join('vehiculos', 'verificacion_fs.id_vehiculo', 'vehiculos.id')
            ->where('verificacion', '>', 2019)
            ->get();
        $verificacion_f2 = DB::table('verificacion_f2s')
            ->select('verificacion_f2s.*', 'vehiculos.marca', 'vehiculos.serie')
            ->join('vehiculos', 'verificacion_f2s.id_vehiculo', 'vehiculos.id')
            ->where('verificacion', '>', 2019)
            ->get();

        $i = 0;
        $title = 'title';
        $start = 'start';
        $color = 'color';
        $descripcion = 'descripcion';
        foreach ($placas as $placas) {
            $newDate = date("Y-m-d", strtotime($placas->fecha_estimada));
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
            $newDato = date("Y-m-d", strtotime($poliza->fecha_estimada));
            $data[$i] = array(
                $title => "Poliza : " . $poliza->poliza,
                $start => $newDato,
                $color => 'green',
                $descripcion => 'La poliza: ' . $poliza->poliza . ' del vehiculo ' . $poliza->marca . ' esta por vencer',
                'url' => 'dashboardvh/' . $poliza->id_vehiculo,
            );
            $i++;
        }
        foreach ($verificacion_e1 as $verificacion_e1) {
            $newDato = date("Y-m-j", strtotime($verificacion_e1->fecha_estimada));
         
          
            $data[$i] = array(
                $title => "Verificacion: " . $verificacion_e1->verificacion,
                $start => $newDato,
                $color => 'blue',
                $descripcion => 'La verificacione estatal A: ' . $verificacion_e1->engomado . ' del vehiculo ' . $verificacion_e1->marca . ' esta por vencer',
                'url' => 'dashboardvh/' . $verificacion_e1->id_vehiculo,
            );
            $i++;
        }
        foreach ($verificacion_e2 as $verificacion_e2) {
            $newDato = date("Y-m-j", strtotime($verificacion_e2->fecha_estimada));

            $data[$i] = array(
                $title => "Verificacion: " . $verificacion_e2->verificacion,
                $start => $newDato,
                $color => '#663399',
                $descripcion => 'La verificacione estatal B: ' . $verificacion_e2->engomado . ' del vehiculo ' . $verificacion_e2->marca . ' esta por vencer',
                'url' => 'dashboardvh/' . $verificacion_e2->id_vehiculo,
            );
            $i++;
        }
        foreach ($verificacion_f as $verificacion_f) {
            $newDato = date("Y-m-j", strtotime($verificacion_f->fecha_estimada));

            $data[$i] = array(
                $title => "Verificacion: " . $verificacion_f->verificacion,
                $start => $newDato,
                $color => '#800000',
                $descripcion => 'La verificacione Federal A: ' . ' Del vehiculo ' . $verificacion_f->marca . ' esta por vencer',
                'url' => 'dashboardvh/' . $verificacion_f->id_vehiculo,
            );
            $i++;
        }
        foreach ($verificacion_f2 as $verificacion_f2) {
            $newDato = date("Y-m-j", strtotime($verificacion_f2->fecha_estimada));

            $data[$i] = array(
                $title => "Verificacion: " . $verificacion_f2->verificacion,
                $start => $newDato,
                $color => '#8B0000',
                $descripcion => 'La verificacione Federal B: ' . ' Del vehiculo ' . $verificacion_f2->marca . ' esta por vencer',
                'url' => 'dashboardvh/' . $verificacion_f2->id_vehiculo,
            );
            $i++;
        }
        return response()->json($data);
    }
}
