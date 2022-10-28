<?php

namespace App\Http\Controllers;

use App\Models\Doormeer;
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
        $cashier = Auth::user()->staff;
        $entry = Entry::where('subsidiary_id', $cashier->subsidiary_id)->where('status_id', 1)->get();
        $emptyDoorsmeer = Doormeer::where('subsidiary_id', $cashier->subsidiary_id)->where('user_id', null)->get();
        $doorsmeer = Doormeer::where('subsidiary_id', $cashier->subsidiary_id)->get();
        $onDoorsmeer = Entry::where('subsidiary_id', $cashier->subsidiary_id)->where('status_id', 2)->count();

        return view('staff.pages.cashier.entry_list', compact('entry','cashier', 'emptyDoorsmeer','doorsmeer', 'onDoorsmeer'));
    }


}
