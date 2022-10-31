<?php

namespace Database\Seeders;

use App\Models\Doormeer;
use App\Models\Subsidiary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoormeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            Doormeer::create([
                'name' => 'doorsmeer' . $i,
                'subsidiary_id' => random_int(1, 5),
            ]);
        }
    }
}
