<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('zeapiaji')
        ]);
        $user -> assignRole('user');

        $pegawai = User::create([
            'name' => 'Pegawai',
            'email' => 'pegawai@gmail.com',
            'password' => bcrypt('zeapiaji')
        ]);
        $pegawai -> assignRole('pegawai');

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('zeapiaji')
        ]);
        $admin -> assignRole('admin');

        $super_admin = User::create([
            'name' => 'Super Admin',
            'email' => 'super_admin@gmail.com',
            'password' => bcrypt('zeapiaji')
        ]);
        $super_admin -> assignRole('super_admin');

        $ceo = User::create([
            'name' => 'Ceo',
            'email' => 'ceo@gmail.com',
            'password' => bcrypt('zeapiaji')
        ]);
        $ceo -> assignRole('ceo');
    }
}
