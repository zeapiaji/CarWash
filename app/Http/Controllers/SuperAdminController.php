<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Staff;
use App\Models\Gender;
use App\Models\Subsidiary;
use App\Exports\AdminExport;
use App\Models\WashingPlans;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Plans;

class SuperAdminController extends Controller
{
    public function dashboard()
    {
        return view('staff.pages.dashboard');
    }

    // Admin
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

    // Plans
    public function manage_plans()
    {
        $data = WashingPlans::all();
        // dd($washing_plans);
        return view('staff.pages.manage_plans.index', compact('data'));
    }

    public function create_plans()
    {
        return view('staff.pages.manage_plans.add');
    }

        // Edit
        public function edit_plans($id)
        {
            $data = WashingPlans::find($id);
            $plans = Plans::all();
            return view('staff.pages.manage_plans.edit', compact('data', 'plans'));
        }   

        public function update_plans(Request $request, $id)
        {
            // dd($request);
            $data = WashingPlans::find($request->id);

            $data->plan_id = $request->name;
            $data->feature = $request->feature;
            $data->type_id = $request->plan;
            $data->save();

            return redirect('manage-plans.index')->with('succes', 'Data telah disimpan');
        }

    // Subsidiary
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
}
