<?php

namespace App\Exports;

use App\Models\User;
use App\Models\Staff;
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
        $auth = Auth::user();
        if ($auth->hasRole('admin')) {
            $data = User::role('cashier')->get();
            $subs = Auth::user()->staff;
            $data = Staff::where('subsidiary_id', $subs->subsidiary_id)
                ->whereNotIn('user_id', [$subs->user_id])
                ->get();
        }elseif ($auth->hasRole('super_admin')) {
            $data = User::role('cashier')->get();
        }
        return view('staff.exports.cashier', compact('data'));
    }
}
