<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AdminExport implements FromView
{
    public function view(): View
    {
        $data = User::role('admin')->get();
        return view('staff.exports.admin', compact('data'));
    }
}
