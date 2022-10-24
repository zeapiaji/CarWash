<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Staff;
use App\Models\Gender;
use App\Models\Subsidiary;
use App\Exports\AdminExport;
use App\Imports\AdminImport;
use App\Models\CarType;
use App\Models\PlanFeature;
use App\Models\Plans;
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
        $data = User::role('admin')->get();
        $totalAdmin = $data->count();

        return view('staff.pages.manage_admin.index', compact('data', 'totalAdmin'));
    }

    public function detail_admin($id)
    {
        $data = User::role('admin')->where('id', $id)->first();

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
            'name' => $request -> name,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'birth' => $request -> birth,
            'gender_id' => $request -> gender,
            'address' => $request -> address,
            'password' => Hash::make($request['password']),
        ])->assignRole('admin');

        Staff::create([
            'user_id' => $user->id,
            'subsidiary_id' => $request->subsidiary,
        ]);

        return redirect('/manage-admin');
    }

    public function edit_admin($id)
    {
        // $data = User::role('admin')->where('id', $id)->first();
        $data = User::find($id);

        // $totalEmployee = User::role('cashier')->get();
        $totalEmployee = Staff::where('subsidiary_id', $data->staff->subsidiary_id)->count();
        // dd($data);

        $gender = Gender::all();
        $role = ModelsRole::whereNotIn('name', ['member'])->get();

        $selectedRole = $data->roles->first()->id;

        return view('staff.pages.manage_admin.edit', compact('data', 'gender', 'totalEmployee', 'role', 'selectedRole'));
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

        // Change role
        Staff::where('user_id', $id)->first()->syncRoles($request->role);

        return redirect('/manage-admin');
    }

    public function delete_admin($id)
    {
        Staff::where('user_id', $id)->update([
            'subsidiary_id' => null,
        ]);

        Staff::where('user_id', $id)->delete();

        User::find($id)->delete();

        return redirect('/manage-admin');
    }

    public function force_delete_admin($id)
    {
        Staff::where('user_id', $id)->forceDelete();
        User::where('id', $id)->forceDelete();

        return back();
    }

    public function multiple_delete_admin(Request $request)
    {
        Staff::withTrashed()->whereIn('user_id', $request->get('selected'))->delete();
        User::withTrashed()->whereIn('id', $request->get('selected'))->delete();

        return response("Selected post(s) deleted successfully.", 200);
    }

    public function recycle_admin()
    {
        $data = User::onlyTrashed()->get();

        return view('staff.pages.manage_admin.recovery', compact('data'));
    }

    public function recovery_admin($id)
    {
        User::withTrashed()->where('id', $id)->restore();
        Staff::withTrashed()->where('user_id', $id)->restore();

        return back();
    }

    public function multiple_recovery_admin(Request $request)
    {
        Staff::withTrashed()->whereIn('user_id', $request->get('selected'))->restore();
        User::withTrashed()->whereIn('id', $request->get('selected'))->restore();

        return response("Akun yang dipilih berhasil dipulihkan.", 200);
    }

    public function multiple_force_delete_admin(Request $request)
    {
        Staff::withTrashed()->whereIn('user_id', $request->get('selected'))->forceDelete();
        User::withTrashed()->whereIn('id', $request->get('selected'))->forceDelete();

        return response("Akun yang dipilih berhasil dihapus.", 200);
    }

    public function recovery_all_admin()
    {
        Staff::onlyTrashed()->restore();
        User::onlyTrashed()->restore();

        return response("Semua admin berhasil dipulihkan.", 200);
    }

    public function force_delete_all_admin()
    {
        Staff::onlyTrashed()->forceDelete();
        User::onlyTrashed()->forceDelete();

        return response("Semua admin berhasil hapus.", 200);
    }

    public function superadmin_washing_data()
    {
        return view('staff.pages.washing_data.index');
    }

    public function show_subsidiary()
    {
        $data = Subsidiary::all();

        return view('staff.pages.manage_subsidiaries.show', compact('data'));
    }

    public function manage_subsidiary()
    {
        $data = Subsidiary::all();
        $totalSubsidiaries = $data->count();

        return view('staff.pages.manage_subsidiaries.index', compact('data', 'totalSubsidiaries'));
    }

    public function detail_subsidiary($id)
    {
        $data = Subsidiary::find($id);
        $staff = Staff::where('subsidiary_id', $id)->get();

        return view('staff.pages.manage_subsidiaries.detail', compact('data', 'staff'));
    }

    public function add_subsidiary()
    {
        return view('staff.pages.manage_subsidiaries.add');
    }

    public function create_subsidiary(Request $request)
    {
        $request->file('path')->getClientOriginalName();

        $path = $request->file('path')->store('public/img/subsidiaries');

        Subsidiary::create([
            'name' => $request -> name,
            'img_path' => $path,
            'location' => $request -> location,
        ]);

        return redirect()->back();
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
        Staff::where('subsidiary_id', $id)->update(['subsidiary_id' => null]);
        Subsidiary::find($id)->delete();

        return redirect()->back();
    }
    public function recycle_subsidiary()
    {
         $data = User::onlyTrashed()->get();
         $totalSubsidiaries = $data->count();
        return view('staff.pages.manage_subsidiaries.recovery', compact('data', 'totalSubsidiaries'));
    }

    public function recovery_subsidiary($id)
    {
        User::withTrashed()->where('id', $id)->restore();
        Staff::withTrashed()->where('user_id', $id)->restore();

        return back();
    }

    public function multiple_recovery_subsidiary(Request $request)
    {
        Staff::withTrashed()->whereIn('user_id', $request->get('selected'))->restore();
        User::withTrashed()->whereIn('id', $request->get('selected'))->restore();

        return response("Akun yang dipilih berhasil dipulihkan.", 200);
    }

    public function multiple_force_delete_subsidiary(Request $request)
    {
        Staff::withTrashed()->whereIn('user_id', $request->get('selected'))->forceDelete();
        User::withTrashed()->whereIn('id', $request->get('selected'))->forceDelete();

        return response("Akun yang dipilih berhasil dihapus.", 200);
    }

    public function recovery_all_subsidiary()
    {
        Staff::onlyTrashed()->restore();
        User::onlyTrashed()->restore();

        return response("Semua admin berhasil dipulihkan.", 200);
    }

    public function force_delete_all_subsidiary()
    {
        Staff::onlyTrashed()->forceDelete();
        User::onlyTrashed()->forceDelete();

        return response("Semua admin berhasil hapus.", 200);
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

    public function export_admin_csv()
    {
        return Excel::download(new AdminExport, 'admin.csv', \Maatwebsite\Excel\Excel::CSV);
    }

    public function export_admin_pdf()
    {
        return Excel::download(new AdminExport, 'admin.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

    /**
     * Pricing
     *
    */
    public function pricing()
    {
        $carType = CarType::all();
        $plans = WashingPlans::all()->groupBy('type_id');
        $washingPlans = WashingPlans::all()->groupBy('plan_id');

        return view('staff.pages.manage_pricing.index', compact('carType', 'washingPlans', 'plans'));
    }

    public function add_pricing_1()
    {
        $carType = CarType::all();

        return view('staff.pages.manage_pricing.add_1', compact('carType'));
    }

    public function create_pricing_1(Request $request)
    {
        foreach ($request->feature as $item) {
            WashingPlans::create([
                'name' => $item,
                'plan_id' => 1,
                'price' => $request->price,
                'type_id' => $request->car_type
            ]);
        };

        return redirect('/pricing');
    }

    public function add_pricing_2()
    {
        $carType = CarType::all();

        return view('staff.pages.manage_pricing.add_2', compact('carType'));
    }

    public function add_pricing_3()
    {
        $carType = CarType::all();

        return view('staff.pages.manage_pricing.add_3', compact('carType'));
    }

    public function add_pricing_4()
    {
        $carType = CarType::all();

        return view('staff.pages.manage_pricing.add_4', compact('carType'));
    }

    public function create_pricing_2(Request $request)
    {
        foreach ($request->feature as $item) {
            WashingPlans::create([
                'name' => $item,
                'plan_id' => 2,
                'price' => $request->price,
                'type_id' => $request->car_type
            ]);
        };

        return redirect('/pricing');
    }

    public function create_pricing_3(Request $request)
    {
        foreach ($request->feature as $item) {
            WashingPlans::create([
                'name' => $item,
                'plan_id' => 3,
                'price' => $request->price,
                'type_id' => $request->car_type
            ]);
        };

        return redirect('/pricing');
    }

    public function create_pricing_4(Request $request)
    {
        foreach ($request->feature as $item) {
            WashingPlans::create([
                'name' => $item,
                'plan_id' => 4,
                'price' => $request->price,
                'type_id' => $request->car_type
            ]);
        };

        return redirect('/pricing');
    }
}
