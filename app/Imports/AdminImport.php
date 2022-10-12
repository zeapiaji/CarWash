<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Staff;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AdminImport implements ToCollection, WithHeadingRow
{
    use Importable;

    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
           $user = User::create([
                'name' => $row['nama'],
                'email' => $row['email'],
                'phone' => $row['telepon'],
                'address' => $row['alamat'],
                'birth' => $row['tanggal_lahir'],
                'gender_id' => $row['gender_id'],
                'password' => Hash::make($row['password']),
            ]);

            $staff = new Staff();
            $staff -> fill([
                'subsidiary_id' => $row['cabang_id'],
            ]);
            $staff->user_id = $user->id;
            $staff->assignRole('admin');
            $staff->save();
        }
    }
}
