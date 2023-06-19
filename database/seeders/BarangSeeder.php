<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FakerFactory;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $faker = FakerFactory::create();

        for ($x = 1; $x <= 10; $x++) {
            DB::table('barangs')->insert([
                'id' => $faker->unique()->numberBetween(1, 100),
                'nama' => $faker->word,
                'harga' => $faker->randomDigit(),
            ]);
        }
    }
}
