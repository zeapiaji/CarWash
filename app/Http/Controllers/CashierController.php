<?php

namespace App\Http\Controllers;

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
        return view('staff.pages.cashier.entry_list');
    }
}
