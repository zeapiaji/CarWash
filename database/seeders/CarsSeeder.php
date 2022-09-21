<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::create([
            'user_id' => 1,
            'number_plate' => 'D 1234 JKL',
            'name' => 'Supa a80',
            'type' => 'coupe',
        ]);
    }
}
