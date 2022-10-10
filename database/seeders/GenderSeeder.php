<?php

namespace Database\Seeders;

use App\Models\Gender;
use FontLib\Table\Type\name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::create([
            'name' => 'Laki-laki'
        ]);

        Gender::create([
            'name' => 'Wanita'
        ]);
    }
}
