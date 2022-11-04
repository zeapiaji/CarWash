<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 25; $i++) {
            User::create([
                'name' => 'member' . $i,
                'email' => 'member' . $i . '@gmail.com',
                'phone' => '1111111111' . $i,
                'address' => 'Jl. Katapang Andir No.Km 4, Sukamukti, Kec. Katapang, Kabupaten Bandung, Jawa Barat 40921',
                'birth' => Carbon::parse('2000-12-28'),
                'gender_id' => random_int(1, 2),
                'password' => bcrypt('zeapiaji')
            ])->assignRole('member');
        }

        for ($i = 1; $i <= 25; $i++) {
            User::create([
                'name' => 'kasir' . $i,
                'email' => 'kasir' . $i . '@gmail.com',
                'phone' => '2222222222' . $i,
                'address' => 'Jl. Katapang Andir No.Km 4, Sukamukti, Kec. Katapang, Kabupaten Bandung, Jawa Barat 40921',
                'birth' => Carbon::parse('2000-12-28'),
                'gender_id' => random_int(1, 2),
                'password' => bcrypt('zeapiaji')
            ])->assignRole('cashier');
        }

        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => 'admin' . $i,
                'email' => 'admin' . $i . '@gmail.com',
                'phone' => '33333333333' . $i,
                'address' => 'Jl. Katapang Andir No.Km 4, Sukamukti, Kec. Katapang, Kabupaten Bandung, Jawa Barat 40921',
                'birth' => Carbon::parse('2000-12-28'),
                'gender_id' => random_int(1, 2),
                'password' => bcrypt('zeapiaji')
            ])->assignRole('admin');
        }


        $super_admin = User::create([
            'name' => 'Super Admin',
            'email' => 'super_admin@gmail.com',
            'phone' => '3005200623',
            'address' => 'Jl. Katapang Andir No.Km 4, Sukamukti, Kec. Katapang, Kabupaten Bandung, Jawa Barat 40921',
            'birth' => Carbon::parse('2000-12-28'),
            'gender_id' => 1,
            'password' => bcrypt('zeapiaji')
        ]);
        $super_admin->assignRole('super_admin');

        $ceo = User::create([
            'name' => 'Ceo',
            'email' => 'ceo@gmail.com',
            'phone' => '082115051232',
            'address' => 'Jl. Katapang Andir No.Km 4, Sukamukti, Kec. Katapang, Kabupaten Bandung, Jawa Barat 40921',
            'birth' => Carbon::parse('2000-12-28'),
            'gender_id' => 1,
            'password' => bcrypt('zeapiaji')
        ]);
        $ceo->assignRole('ceo');
    }
}
