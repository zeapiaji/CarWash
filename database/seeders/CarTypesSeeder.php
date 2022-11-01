<?php

namespace Database\Seeders;

use App\Models\CarType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarType::create([
            'name' => 'Sedan',
        ]);

        CarType::create([
            'name' => 'Coupe',
        ]);

        CarType::create([
            'name' => 'SUV',

        ]);

        CarType::create([
            'name' => 'Van',
        ]);
    }
}
