<?php

namespace App\Exports;

use App\Models\Placas;
use App\Models\Vehiculo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class PlacasExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Placas::select("año", "monto", "fecha_pago", "marca")->join('vehiculos', 'placas.id_vehiculo','vehiculos.id')->get();
    }
     /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings() :array
    {
        return [
            'AÑO',
            'PAGO',
            'FECHA DE PAGO',
            'VEHICULO',
        ];
    }
    
}
