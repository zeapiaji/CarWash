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
        for ($i=1; $i < 10; $i++) {
            Car::create([
                'user_id' => $i,
                'number_plate' => 'D 123'.$i.' JKL',
                'name' => 'Supa a80',
                'type' => 'coupe',
            ]);
        }
    }
}
