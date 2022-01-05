<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\FisicoExport;
use App\Exports\TenenciasExport;
use App\Exports\PlacasExport;
use App\Exports\PolizasExport;
use App\Exports\TarjetaExport;
use App\Exports\VerificacionE1Export;
use App\Exports\VerificacionE2Export;
use App\Exports\VerificacionF1Export;
use App\Exports\VerificacionF2Export;

use Maatwebsite\Excel\Facades\Excel; 

class ExcelController extends Controller
{
    public function exportartenencia()
    {
        return Excel::download(new TenenciasExport, 'Tenencias.xlsx');
    }
    public function exportarpolizas()
    {
        return Excel::download(new PolizasExport, 'polizas.xlsx');
    }
    public function exportarverificacione1()
    {
        return Excel::download(new VerificacionE1Export, 'verificacion estatal primer periodo.xlsx');
    }
    public function exportarverificacione2()
    {
        return Excel::download(new VerificacionE2Export, 'verificacion estatal segundo periodo.xlsx');
    }
    public function exportarverificacionf1()
    {
        return Excel::download(new VerificacionF1Export, 'verificacion federal primer periodo.xlsx');
    }
    public function exportarverificacionf2()
    {
        return Excel::download(new VerificacionF2Export, 'verificacion federal segundo periodo.xlsx');
    }
    public function fisico()
    {
        return Excel::download(new FisicoExport, 'Verificacion fisico mecanico.xlsx');
    }
    public function placas()
    {
        return Excel::download(new PlacasExport, 'placas.xlsx');
    }
    public function tarjetas()
    {
        return Excel::download(new TarjetaExport, 'tarjetas de circulacion.xlsx');
    }
    public function permisos()
    {
        return Excel::download(new TenenciasExport, 'Permisos.xlsx');
    }
}
