<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Plans;
use App\Models\Staff;
use App\Models\Gender;
use App\Models\Subsidiary;
use App\Exports\AdminExport;
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

    // public function superadmin_washing_data()
    // {
    //     return view('staff.pages.washing_data.index');
    // }

    public function manage_subsidiary()
    {
        $data = Staff::role('admin')->get();
        $totalSubsidiaries = $data -> count();
        // dd($data);
        return view('staff.pages.manage_subsidiaries.index', compact('data', 'totalSubsidiaries'));
    }

    public function detail_subsidiary($id)
    {
        $data = Subsidiary::find($id);
        $staff = Staff::where('subsidiary_id', $id)->get();

        return view('staff.pages.manage_subsidiaries.detail_subsidiary', compact('data', 'staff'));
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

    public function pricing()
    {
        $plans = Plans::all();
        // $paket = $plans -> count();
        // dd($plans);
        return view('staff.pages.manage_plans.index', compact('plans'));
    }

    public function add_pricing()
    {
        return view('staff.pages.manage_plans.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'harga' => 'required',
            'fitur' => 'required'
        ]);

        Plans::create([
            'harga' => $request->harga,
            'fitur' => $request->fitur
        ]);

        return redirect('/pricing');

        // return request()->all();
    }
}
