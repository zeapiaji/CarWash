<?php

namespace Database\Seeders;

use App\Models\Subsidiary;
use Illuminate\Database\Seeder;

class SubsidiariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            Subsidiary::create([
                'name' => 'cabang' . $i,
                'location' => 'lokasi' . $i,
            ]);
        }
    }
}
