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
        for ($i=1; $i < 4; $i++) {
            Plans::create([
                'name' => 'Cuci Biasa',
                'type_id' => $i,
            ]);
        }
        for ($i=1; $i < 4; $i++) {
            Plans::create([
                'name' => 'Cuci Reguler',
                'type_id' => $i,
            ]);
        }
        for ($i=1; $i < 4; $i++) {
            Plans::create([
                'name' => 'Cuci Premium',
                'type_id' => $i,
            ]);
        }
        for ($i=1; $i < 4; $i++) {
            Plans::create([
                'name' => 'Cuci Elit',
                'type_id' => $i,
            ]);
        }

    }
}
