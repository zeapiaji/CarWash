<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'name' => 'Menunggu',
        ]);
        Status::create([
            'name' => 'Sedang dicuci',
        ]);
        Status::create([
            'name' => 'Selesai dicuci',
        ]);
    }
}
