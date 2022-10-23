<?php

namespace App\Exports;

use App\Models\Staff;
use App\Models\User;
use Auth;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;



class CashierExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $data = User::role('cashier')->get();
        $subs = Auth::user()->staff;
        $data = Staff::where('subsidiary_id', $subs->subsidiary_id)
            ->whereNotIn('user_id', [$subs->user_id])
            ->get();

            return view('staff.exports.cashier', compact('data'));
    }
}
