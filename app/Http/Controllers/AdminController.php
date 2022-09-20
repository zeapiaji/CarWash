<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('staff.admin.pages.dashboard');
    }

    public function manage_employee()
    {
        return view('staff.admin.pages.manage_employee.index');
    }

    public function manage_member()
    {
        return view('staff.admin.pages.manage_member.index');
    }

    public function pricing()
    {
        return view('staff.admin.pages.manage_price.index');
    }

    public function admin_washing_data()
    {
        return view('staff.admin.pages.washing_data.index');
    }
}
