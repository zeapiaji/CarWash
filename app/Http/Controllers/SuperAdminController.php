<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Plans;
use App\Models\Staff;
use App\Models\Gender;
use App\Models\Subsidiary;
use App\Exports\AdminExport;
use App\Imports\AdminImport;
use App\Models\CarType;
use App\Models\WashingPlans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Models\Role as ModelsRole;

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
        $data = Staff::role('admin')->where('user_id', $id)->first();

        return view('staff.pages.manage_admin.detail', compact('data'));
    }

    public function add_admin()
    {
        $role = ModelsRole::whereNotIn('name',['member'])->get();

        $subsidiaries = Subsidiary::all();
        $gender = Gender::all();
        return view('staff.pages.manage_admin.add', compact('role', 'gender', 'subsidiaries'));
    }

    public function create_admin(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'birth' => $request->birth,
            'gender_id' => $request->gender,
            'address' => $request->address,
            'password' => Hash::make($request['password']),
        ]);

        Staff::create([
            'user_id' => $user->id,
            'subsidiary_id' => $request->subsidiary,
        ])->assignRole('admin');

        return redirect('/manage-admin');
    }

    public function edit_admin($id)
    {
        $data = Staff::role('admin')->where('user_id', $id)->first();
        $totalEmployee = Staff::role('cashier')->where('subsidiary_id', $data->subsidiary_id)->count();
        $gender = Gender::all();
        $role = ModelsRole::whereNotIn('name', ['member'])->get();

        $selectedRole = $data->roles->first()->id;

        return view('staff.pages.manage_admin.edit', compact('data', 'gender', 'totalEmployee', 'role', 'selectedRole'));
    }

    public function update_admin(Request $request, $id)
    {
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->birth = $request->birth;
        $data->address = $request->address;
        $data->gender_id = $request->gender;
        $data->save();

        // Change role
        Staff::where('user_id', $id)->first()->syncRoles($request->role);

        return redirect('/manage-admin');
    }

    public function delete_admin($id)
    {
        User::find($id)->delete();

        return redirect('/manage-admin');
    }

    public function multiple_delete_admin(Request $request)
    {
        Staff::whereIn('id', $request->get('selected'))->delete();

        return response("Selected post(s) deleted successfully.", 200);
    }

    public function manage_subsidiary()
    {
        $data = Staff::role('admin')->get();
        $totalSubsidiaries = $data->count();

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
        $data = Staff::where('subsidiary_id', $id)->first();
        $staff = Staff::where('subsidiary_id', $id)->get();
        $admin = Staff::role('admin')->get();
        $selectedAdmin = $admin->where('subsidiary_id', $id)->first();
        // dd($staff);

        return view('staff.pages.manage_subsidiaries.edit', compact('data', 'staff','selectedAdmin'));
    }

    public function update_subsidiary(Request $request, $id)
    {
        $data = Subsidiary::find($id);
        $data->name = $request->name;
        $data->location = $request->location;
        $data->save();

        $admin = Staff::role('admin')->get();
        $selectedAdmin = $admin->where('subsidiary_id', $id)->first();
        $selectedAdmin->syncRoles(['cashier']);

        $newStaff = Staff::where('user_id', $request->admin)->first();
        $newStaff->syncRoles(['admin']);

        return redirect('/manage-subsidiaries');
    }

    public function delete_subsidiary($id)
    {
        Staff::where('subsidiary_id', $id)->update(['subsidiary_id' => null]);
        Subsidiary::find($id)->delete();

        return redirect()->back();
    }

    public function import_admin_xlsx(Request $request)
    {
        Excel::import(new AdminImport, $request->file('file_admin'));

        return redirect('/manage-admin');
    }

    public function export_admin_xlsx()
    {
        return Excel::download(new AdminExport, 'admin.xlsx');
    }

    public function washing_data()
    {
        $washing_plans = WashingPlans::all();
        return view('staff.pages.washing_data.index', compact('washing_plans'));
    }

    public function pricing()
    {
        $plans = Plans::all();
        // dd($plans);
        return view('staff.pages.manage_plans.index', compact('plans'));
    }

    public function add_pricing()
    {
    
        $car_types = CarType::all();
        // dd($car_types);
        return view('staff.pages.manage_plans.add', compact('car_types'));
    }

    public function create_pricing(Request $request)
    {
        $plans = Plans::create([
            'name' => $request->name,
            'price' => $request->price,
            'type_id' => $request->type_id,
        ]);

        CarType::create([
            'name' => $request->name,
        ]);

        return redirect('/manage_plans');

    }


    // public function store(Request $request)
    // {
    //     $this->validate($request,[
    //         'harga' => 'required',
    //         'fitur' => 'required'
    //     ]);

    //     Plans::create([
    //         'harga' => $request->harga,
    //         'fitur' => $request->fitur
    //     ]);

    //     return redirect('/pricing');

    //     // return request()->all();
    // }
}
