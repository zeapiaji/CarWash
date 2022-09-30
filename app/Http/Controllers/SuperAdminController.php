<?php

namespace App\Http\Controllers;

use App\Exports\AdminExport;
use App\Models\Gender;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SuperAdminController extends Controller
{
    public function dashboard()
    {
        return view('staff.pages.dashboard');
    }

    public function manage_admin()
    {
        $data = User::role('admin')->get();
        $totalAdmin = $data->count();
        return view('staff.pages.manage_admin.index', compact('data', 'totalAdmin'));
    }

    public function edit_admin($id)
    {
        $data = User::role('admin')->where('id', $id)->first();
        $gender = Gender::all();

        return view('staff.pages.manage_admin.edit', compact('data', 'gender'));
    }

    public function superadmin_washing_data()
    {
        return view('staff.pages.washing_data.index');
    }

    public function export_admin_xlsx()
    {
        return Excel::download(new AdminExport, 'admin.xlsx');
    }
}
