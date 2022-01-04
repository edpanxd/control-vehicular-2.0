<?php

namespace App\Exports;

use App\Models\Verificacion_a;
use App\Models\Vehiculo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class VerificacionE1Export implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Verificacion_a::select("verificacion", "monto", "fecha_pago", "marca")->join('vehiculos', 'Verificacion_as.id_vehiculo','vehiculos.id')->get();
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
