<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function dashboard()
    {
        return view('staff.super_admin.pages.dashboard');
    }

    public function manage_admin()
    {
        return view('staff.super_admin.pages.manage_admin.index');
    }

    public function superadmin_washing_data()
    {
        return view('staff.super_admin.pages.washing_data.index');
    }
}
