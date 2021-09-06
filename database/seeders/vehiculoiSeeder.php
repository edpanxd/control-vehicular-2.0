<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class vehiculoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nuemro = 1;
        $faker = Faker::create();
        foreach (range(1, 10) as $value) {
            DB::table('vehiculos_is')->insert([
                'no_factura' => $faker->randomNumber(5, true),
                'archivo_fa' => 'Sin archivo',
                'pedimiento' => $faker->randomNumber(5, true),
                'archivo_pe' =>'Sin archivo',
                'titulo_pro' => $faker->randomNumber(5, true),
                'archivo_titu' => 'Sin archivo',
                'id_vehiculo' => $nuemro,
            ]);
        }
    }
}
