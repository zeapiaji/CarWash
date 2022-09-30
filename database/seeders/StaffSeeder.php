<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::role(['admin'])->get();
        $employee = User::role(['employee'])->get();

        foreach ($admin as $item) {
            Staff::create([
                'user_id' => $item->id,
                'subsidiary_id' => random_int(1,5),
            ])->assignRole('admin');
        }

        foreach ($employee as $item) {
            Staff::create([
                'user_id' => $item->id,
                'subsidiary_id' => random_int(1,5),
            ])->assignRole('employee');
        }

    }
}
