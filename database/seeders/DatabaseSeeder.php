<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PlanFeature;
use App\Models\Staff;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GenderSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CarTypesSeeder::class);
        $this->call(CarsSeeder::class);
        $this->call(PlansSeeder::class);
        $this->call(WashingPlansSeeder::class);
        $this->call(SubsidiariesSeeder::class);
        $this->call(StaffSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(DoormeerSeeder::class);
    }
}
