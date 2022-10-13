<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Models\Subsidiary;
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
        $cashier = User::role('cashier')->get();
        $admin = User::role('admin')->get();
        // $subsidiary = Subsidiary::all();
        $no=1;
        foreach ($cashier as $item) {
            Staff::create([
                'user_id' => $item->id,
                'subsidiary_id' => random_int(1,5),
            ]);
        }

        foreach ($admin as $item) {
            Staff::create([
                'user_id' => $item->id,
                'subsidiary_id' => $no++,
            ]);
        }

    }
}
