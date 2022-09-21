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
            'phone' => '123123123',
            'address' => 'Jl. Katapang Andir No.Km 4, Sukamukti, Kec. Katapang, Kabupaten Bandung, Jawa Barat 40921',
            'password' => bcrypt('zeapiaji')
        ]);
        $user -> assignRole('user');

        $pegawai = User::create([
            'name' => 'Pegawai',
            'email' => 'pegawai@gmail.com',
            'phone' => '1242090923',
            'address' => 'Jl. Katapang Andir No.Km 4, Sukamukti, Kec. Katapang, Kabupaten Bandung, Jawa Barat 40921',
            'password' => bcrypt('zeapiaji')
        ]);
        $pegawai -> assignRole('pegawai');

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '1228200423',
            'address' => 'Jl. Katapang Andir No.Km 4, Sukamukti, Kec. Katapang, Kabupaten Bandung, Jawa Barat 40921',
            'password' => bcrypt('zeapiaji')
        ]);
        $admin -> assignRole('admin');

        $super_admin = User::create([
            'name' => 'Super Admin',
            'email' => 'super_admin@gmail.com',
            'phone' => '3005200623',
            'address' => 'Jl. Katapang Andir No.Km 4, Sukamukti, Kec. Katapang, Kabupaten Bandung, Jawa Barat 40921',
            'password' => bcrypt('zeapiaji')
        ]);
        $super_admin -> assignRole('super_admin');

        $ceo = User::create([
            'name' => 'Ceo',
            'email' => 'ceo@gmail.com',
            'phone' => '082115051232',
            'address' => 'Jl. Katapang Andir No.Km 4, Sukamukti, Kec. Katapang, Kabupaten Bandung, Jawa Barat 40921',
            'password' => bcrypt('zeapiaji')
        ]);
        $ceo -> assignRole('ceo');
    }
}
