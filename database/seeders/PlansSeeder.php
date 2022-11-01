<?php

namespace Database\Seeders;

use App\Models\Plans;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 5; $i++) {
            # code...
            Plans::create([
                'name' => 'Paket' . $i,
                'price' => random_int(20000, 5000000)
            ]);
        }
    }
}
