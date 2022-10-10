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

    public function dashboard()
    {
        return view('staff.cashier.pages.dashboard');
    }

    public function transaction()
    {
        return view('staff.cashier.pages.transaction.index');
    }

    public function queue()
    {
        return view('staff.cashier.pages.queue.index');
    }

}
