<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class vehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $value) {
            DB::table('vehiculos')->insert([
                'marca' => $faker->word,
                'submarca' => $faker->word,
                'tipo' => $faker->word,
                'modelo' => $faker->year,
                'color' => $faker->colorName,
                'serie' => $faker->name,
                'numeroM' => $faker->country,
                'estatus' => $faker->word,
                'uso' => $faker->word,
                'adquisicion' => $faker->word,
                'empresa' => $faker->word,
                'imagen' => $faker->name,
            ]);
        }
    }
}
