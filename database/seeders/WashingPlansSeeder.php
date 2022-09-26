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
        for ($i=1; $i < 5; $i++) {
            WashingPlans::create([
                'plan_id' => $i,
                'feature' => 'fitur '.$i,
            ]);
        }

        for ($i=1; $i < 8; $i++) {
            WashingPlans::create([
                'plan_id' => $i,
                'feature' => 'fitur '.$i,
            ]);
        }

        for ($i=1; $i < 10; $i++) {
            WashingPlans::create([
                'plan_id' => $i,
                'feature' => 'fitur '.$i,
            ]);
        }

        for ($i=1; $i < 13; $i++) {
            WashingPlans::create([
                'plan_id' => $i,
                'feature' => 'fitur '.$i,
            ]);
        }

    }
}
