<?php

namespace App\Exports;

use App\Models\fisico_m;
use App\Models\Vehiculo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class FisicoExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return fisico_m::select("verificacion", "monto", "fecha_pago", "marca")->join('vehiculos', 'fisico_ms.id_vehiculo','vehiculos.id')->get();
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
