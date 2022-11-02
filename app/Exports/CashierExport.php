<?php

namespace App\Exports;

use App\Models\Staff;
use App\Models\User;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromView;



class CashierExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $subs = Auth::user()->staff;
        $data = User::role('cashier')->get();
        $data = Staff::where('subsidiary_id', $subs->subsidiary_id)
            ->whereNotIn('user_id', [$subs->user_id])->get();
        return view('staff.exports.cashier', compact('data'));
    }
}
