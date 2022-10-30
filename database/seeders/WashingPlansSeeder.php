<?php

namespace Database\Seeders;

use App\Models\WashingPlans;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WashingPlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 25; $i++) {
            WashingPlans::create([
                'name' => 'Paket '.$i,
                'plan_id' => random_int(1,4),
            ]);
        }
    }
}
