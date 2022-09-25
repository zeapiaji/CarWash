<?php

namespace App\Imports;

use App\Models\Car;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MemberImport implements ToCollection, WithHeadingRow
{
    use Importable;

    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
           $user = User::create([
                'name' => $row['nama'],
                'phone' => $row['telepon'],
                'address' => $row['alamat'],
                'email' => $row['email'],
                'password' => Hash::make($row['password']),
            ]);

            $car = new Car();
            $car -> fill([
                'number_plate' => $row['plat_nomor'],
                'name' => $row['mobil'],
                'type' => $row['tipe'],
                'user_id' =>$this->user =  $user->id,
            ]);
            $user->assignRole('user');
            $car->user_id = $user->id;
            $car->save();
        }
    }

}
