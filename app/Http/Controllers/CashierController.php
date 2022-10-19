<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\Staff;
use Illuminate\Support\Facades\Auth;

class CashierController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cashier_dashboard()
    {

        return view('staff.pages.cashier.index');
    }

    public function transaction()
    {
        return view('staff.cashier.pages.transaction.index');
    }

    public function entry_list()
    {
        $cashier = Auth::user();
        $cashier = Staff::where('user_id', $cashier->id)->first();
        $entry = Entry::where('subsidiary_id', $cashier->subsidiary_id)->get();

        return view('staff.pages.cashier.entry_list', compact('entry'));
    }
}
