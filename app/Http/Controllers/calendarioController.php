<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\Models\polizas;
use Illuminate\Support\Facades\DB;
use PDF;

class calendarioController extends Controller
{
    public function calendarioPP()
    {
        $tenencias = new DateTime("now");
        $año = date('Y');
        $final = new DateTime("30-03-$año");

        if (new DateTime(" 01-02-$año") <= $tenencias and new DateTime(" 30-03-$año") >= $tenencias) {
            echo "hola si pase";
        }
    }
    public function calendarioT()
    {
        $numbers[] = range(1, 12);
        shuffle($numbers);
        return view("bingo.reporte");
    }
    public function pruebas()
    {


        $tablas = ["polizas", "tenencias", "verificacion_as", "verificacion_bs", "verificacion_fs", "verificacion_f2s", "fisico_ms", "placas", "tarjetacs"];
        $sumaA = [];
        $año = date('Y');
        $añoE = 2016;
        $b = 0;
        while ($añoE <= $año) {
            $a = 0;
            $añosumado = 0;
            while ($a <= 8) {
                $anualP = DB::table($tablas[$a])->whereYear('fecha_pago', $añoE)->sum('monto');
                $añosumado = $añosumado + $anualP;
                print_r("____" . $anualP . "____");
                $a = $a + 1;
            }
            $sumaA[$b] = $añosumado;
            print_r($añoE . "____>" . $añosumado . "_____>" . $sumaA[$b] . "--->");
            $añoE = $añoE + 1;
            $b = $b + 1;
        }
    }
    public function calendarioVF()
    {
        return view('calendarios.calendario');
    }
}
