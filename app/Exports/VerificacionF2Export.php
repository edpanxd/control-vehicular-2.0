<?php

namespace App\Exports;

use App\Models\verificacion_f2;
use App\Models\Vehiculo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class VerificacionF2Export implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return verificacion_f2::select("verificacion", "monto", "fecha_pago", "marca")->join('vehiculos', 'verificacion_f2s.id_vehiculo','vehiculos.id')->get();
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
