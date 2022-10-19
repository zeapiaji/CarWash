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
        for ($i=1; $i < 25; $i++) {
            Car::create([
                'user_id' => $i,
                'number_plate' => 'D 123'.$i.' JKL',
                'name' => 'Supra '.$i,
                'type_id' => random_int(1, 5),
            ]);
        }
    }
}
