<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function dashboard()
    {
        return view('staff.employee.pages.dashboard');
    }

    public function transaction()
    {
        return view('staff.employee.pages.transaction.index');
    }

    public function queue()
    {
        return view('staff.employee.pages.queue.index');
    }

}
