<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class vehiculonSeeder extends Seeder
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
            DB::table('vehiculos_ns')->insert([
                'no_factura' => $faker->randomNumber(5, true),
                'archivo_fa' => 'Sin archivo',
                'refactura' => $faker->randomNumber(5, true),
                'archivo_refa' =>'Sin archivo',
                'carta_fa' => $faker->randomNumber(5, true),
                'archivo_car' => 'Sin archivo',
                'id_vehiculo' => $nuemro,
            ]);
        }
    }
}
