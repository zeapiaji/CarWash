<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Staff;
use App\Models\Gender;
use App\Models\Subsidiary;
use App\Exports\AdminExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SuperAdminController extends Controller
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
        return view('staff.pages.dashboard');
    }

    public function manage_admin()
    {
        $data = Staff::role('admin')->get();
        $totalAdmin = $data->count();

        return view('staff.pages.manage_admin.index', compact('data', 'totalAdmin'));
    }

    public function detail_admin($id)
    {
        $data = Staff::find($id);

        return view('staff.pages.manage_admin.detail', compact('data'));
    }

    public function edit_admin($id)
    {
        $data = Staff::role('admin')->where('user_id', $id)->first();
        $totalEmployee = Staff::role('employee')->where('subsidiary_id', $data->subsidiary_id)->count();
        $gender = Gender::all();

        return view('staff.pages.manage_admin.edit', compact('data', 'gender', 'totalEmployee'));
    }

    public function update_admin(Request $request, $id)
    {
        $data = User::find($id);
        $data -> name = $request -> name;
        $data -> email = $request -> email;
        $data -> phone = $request -> phone;
        $data -> birth = $request -> birth;
        $data -> address = $request -> address;
        $data -> gender_id = $request -> gender;
        $data->save();

        return redirect('/manage-admin');
    }

    public function delete_admin($id)
    {
        User::find($id)->delete();

        return redirect('/manage-admin');
    }

    public function superadmin_washing_data()
    {
        return view('staff.pages.washing_data.index');
    }

    public function manage_subsidiary()
    {
        $data = Staff::role('admin')->get();
        $totalSubsidiaries = $data -> count();

        return view('staff.pages.manage_subsidiaries.index', compact('data', 'totalSubsidiaries'));
    }

    public function detail_subsidiary($id)
    {
        $data = Subsidiary::find($id);
        $staff = Staff::where('subsidiary_id', $id)->get();

        return view('staff.pages.manage_subsidiaries.detail', compact('data', 'staff'));
    }

    public function edit_subsidiary($id)
    {
        $data = Subsidiary::find($id);
        $staff = Staff::where('subsidiary_id', $id)->get();

        return view('staff.pages.manage_subsidiaries.edit', compact('data', 'staff'));
    }

    public function update_subsidiary(Request $request, $id)
    {
        $data = Subsidiary::find($id);
        $data->name = $request->name;
        $data->location = $request->location;
        $data->save();

        return redirect('/manage-subsidiaries');
    }

    public function delete_subsidiary($id)
    {
        # code...
    }

    public function export_admin_xlsx()
    {
        return Excel::download(new AdminExport, 'admin.xlsx');
    }
}
