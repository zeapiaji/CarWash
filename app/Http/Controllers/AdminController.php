<?php

namespace App\Http\Controllers;


use App\Models\Car;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Staff;
use App\Models\Gender;
use App\Models\CarType;
use App\Exports\MemberExport;
use App\Imports\MemberImport;
use App\Models\Subsidiary;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role as ModelsRole;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Contracts\Role;

class AdminController extends Controller
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
        return view('staff.pages.dashboard_admin.dashboard');
    }

    public function dashboard_table()
    {
        
       
        

        $data = User::role('cashier')->get();
        // $gender = Gender::all();
        $totalKasir = $data->count();

        return view('staff.pages.dashboard_admin.dashboard', compact('data', 'totalKasir'));
    }

    public function manage_cashier()
    {
        $data = User::role('cashier')->get();
        $subs = Auth::user()->staff;
        $data = Staff::where('subsidiary_id', $subs->subsidiary_id)
            ->whereNotIn('user_id', [$subs->user_id])
            ->get();

        $gender = Gender::all();


        return view('staff.pages.manage_cashier.index', compact('data'));
    }

    // Member
    public function manage_member()
    {
        $data = User::role('member')->get();
        // dd($data);
        $totalUser = $data->count();

        return view('staff.pages.manage_member.index', compact('data', 'totalUser'));
    }

    public function detail_member($id)
    {
        $data = User::find($id);

        return view('staff.pages.manage_member.detail', compact('data'));
    }

    // Edit
    public function edit_member($id)
    {
        $data = User::role('member')->where('id', $id)->first();
        $car_type = CarType::all();
        $gender = Gender::all();
        return view('staff.pages.manage_member.edit', compact('data', 'car_type', 'gender'));
    }

    public function update_member(Request $request)
    {
        $data = User::find($request->id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->birth = $request->birth;
        $data->gender_id = $request->gender;
        $data->save();

        $car = Car::where('user_id', $data->id)->first();
        $car->name = $request->car;
        $car->type_id = $request->type;
        $car->number_plate = $request->number_plate;
        $car->save();

        return redirect('/manage-member');
    }


    public function delete_admin($id)
    {
        User::find($id)->delete();
        Car::where('user_id', $id)->delete();

        return redirect('/manage-admin');
    }

    public function multiple_delete_admin(Request $request)
    {
        Car::whereIn('user_id', $request->get('selected'))->delete();
        User::whereIn('id', $request->get('selected'))->delete();

        return response("Selected post(s) deleted successfully.", 200);
    }

    public function recycle_admin()
    {
        $data = User::onlyTrashed()->get();
        $totalUser = $data->count();
        return view('staff.pages.manage_admin.recoveryadmin', compact('data', 'totalUser'));
    }

    public function recovery_admin($id)
    {
        User::withTrashed()->where('id', $id)->restore();
        Car::withTrashed()->where('user_id', $id)->restore();

        return redirect('/recycle-admin');
    }

    public function multiple_recovery_admin(Request $request)
    {
        Car::whereIn('user_id', $request->get('selected'))
            ->restore();
        User::whereIn('id', $request->get('selected'))
            ->restore();

        return response("Selected post(s) deleted successfully.", 200);
    }

    public function recovery_all_admin()
    {
        User::withTrashed()->restore();
        Car::withTrashed()->restore();

        return response("Selected post(s) deleted successfully.", 200);
    }

    public function forcedelete_admin($id)
    {
        User::withTrashed()->where('id', $id)->forceDelete();
        Car::withTrashed()->where('id', $id)->forceDelete();

        return redirect('/recycle-admin');
    }

    public function multiple_force_delete_admin(Request $request)
    {
        Car::whereIn('user_id', $request->get('selected'))
            ->forceDelete();
        User::whereIn('id', $request->get('selected'))
            ->forceDelete();

        return response("Selected post(s) deleted successfully.", 200);
    }

    public function force_delete_all_admin()
    {
        Car::onlyTrashed()->forceDelete();
        User::onlyTrashed()->forceDelete();

        return response("Selected post(s) deleted successfully.", 200);
    }


    // Soft Delete
    public function delete_member($id)
    {
        User::find($id)->delete();
        Car::where('user_id', $id)->delete();

        return redirect('/manage-member');
    }

    public function multiple_delete_member(Request $request)
    {
        Car::whereIn('user_id', $request->get('selected'))->delete();
        User::whereIn('id', $request->get('selected'))->delete();

        return response("Selected post(s) deleted successfully.", 200);
    }

    public function recycle_member()
    {
        $data = User::onlyTrashed()->get();
        $totalUser = $data->count();
        return view('staff.pages.manage_member.recovery', compact('data', 'totalUser'));
    }

    public function recovery_member($id)
    {
        User::withTrashed()->where('id', $id)->restore();
        Car::withTrashed()->where('user_id', $id)->restore();

        return redirect('/recycle-member');
    }

    public function multiple_recovery_member(Request $request)
    {
        Car::whereIn('user_id', $request->get('selected'))
            ->restore();
        User::whereIn('id', $request->get('selected'))
            ->restore();

        return response("Selected post(s) deleted successfully.", 200);
    }

    public function recovery_all_member()
    {
        User::withTrashed()->restore();
        Car::withTrashed()->restore();

        return response("Selected post(s) deleted successfully.", 200);
    }

    public function forcedelete_member($id)
    {
        User::withTrashed()->where('id', $id)->forceDelete();
        Car::withTrashed()->where('id', $id)->forceDelete();

        return redirect('/recycle-member');
    }

    public function multiple_force_delete_member(Request $request)
    {
        Car::whereIn('user_id', $request->get('selected'))
            ->forceDelete();
        User::whereIn('id', $request->get('selected'))
            ->forceDelete();

        return response("Selected post(s) deleted successfully.", 200);
    }

    public function force_delete_all_member()
    {
        Car::onlyTrashed()->forceDelete();
        User::onlyTrashed()->forceDelete();

        return response("Selected post(s) deleted successfully.", 200);
    }
    


    //Staff
    public function detail_cashier($id)
    {
        $data = User::role('cashier')->where('id', $id)->first();
        $gender = Gender::all();
        return view('staff.pages.manage_cashier.detailcashier', compact('data'));
    }
    public function input_cashier()
    {
        $role = ModelsRole::WhereNotIn('name', ['member'])->get();
        $subsidiaries = Subsidiary::all();

        $gender = Gender::all();

        return view('staff.pages.manage_cashier.input', compact('gender', 'gender', 'subsidiaries'));
    }


    public function store_cashier(Request $request)
    {

        $user = User::create([

            'name'        => $request->name,
            'email'       => $request->email,
            'password'    => hash::make($request['password']),
            'phone'       => $request->phone,
            'birth'       => $request->birth,
            'address'     => $request->address,
            'gender_id'   => $request->gender,
        ])->assignRole('cashier');
        Staff::create([
            'user_id'       => $user->id,
            'subsidiary_id' => $request->subsidiary,
        ]);

        return redirect('/manage-cashier');
    }



    public function edit_cashier($id)
    {
        // $data = User::role('cashier')->where('user_id', $id)->first();
        $data = User::find($id);
        $role = ModelsRole::whereNotIn('name', ['member'])->get();
        // $totalcashier = User::role('cashier')->where('subsidiary_id', $data->subsidiary_id)->count();
        $gender = Gender::all();
        $selectedRole = $data->roles->first()->id;
        // dd($selectedRole);
        return view('staff.pages.manage_cashier.edit', compact('data', 'gender', 'role', 'selectedRole'));
    }
    public function update_cashier(Request $request, $id)
    {
        $data = User::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        // $data->password = Hash::make($request['password']);
        $data->birth = $request->birth;
        $data->phone = $request->phone;
        // $data->selectedRole = $request->role;
        $data->address = $request->address;
        $data->gender_id = $request->gender;
        $data->save();

        Staff::where('user_id', $id)->first()->syncRoles($request->role);

        return redirect('/manage-cashier');
    }

    // Soft Delete
    public function delete_cashier($id)
    {

        Staff::role('cashier')->find($id)->delete();
        User::find($id)->delete();

        return redirect('/manage-cashier');
    }

    public function multiple_delete_cashier(Request $request)
    {
        Staff::role('cashier')->whereIn('id', $request->get('selected'))->delete();
        User::role('cashier')->whereIn('id', $request->get('selected'))->delete();

        return response("Selected post(s) deleted successfully.", 200);
    }

    public function recycle_cashier()
    {
        $data = User::onlyTrashed()->get();
        return view('staff.pages.manage_cashier.recovery', compact('data'));
    }

    public function recovery_cashier($id)
    {
        User::withTrashed()->where('id', $id)->restore();
        // $data = Staff::role('cashier')->withTrashed()->where('id', $id)->restore();
        $data = User::role('cashier')->withTrashed()->where('id', $id)->restore();

        return redirect('/recycle/cashier');
    }

    public function multiple_recovery_cashier(Request $request)
    {
        // Staff::role('cashier')->whereIn('id', $request->get('selected'))
        //     ->restore();
        User::role('cashier')->whereIn('id', $request->get('selected'))
            ->restore();

        // $data = Staff::role('cashier')->whereIn('id', $request->get('selected'));
        $data = User::role('cashier')->whereIn('id', $request->get('selected'));

        return response("Selected post(s) deleted successfully.", 200);
    }

    public function recovery_all_cashier()
    {
        // Staff::role('cashier')->Trashed()->restore();
        User::role('cashier')->Trashed()->restore();

        return response("Selected post(s) deleted successfully.", 200);
    }

    public function forcedelete_cashier($id)
    {
        // Staff::role('cashier')->withTrashed()->where('id', $id)->forceDelete();
        User::role('cashier')->withTrashed()->where('id', $id)->forceDelete();

        return redirect('/recycle/cashier');
    }

    public function multiple_force_delete_cashier(Request $request)
    {
        // Car::whereIn('user_id', $request->get('selected'))
        //     ->forceDelete();
        // Staff::role('cashier')->whereIn('id', $request->get('selected'))
        //     ->forceDelete();
        User::role('cashier')->whereIn('id', $request->get('selected'))
            ->forceDelete();

        return response("Selected post(s) deleted successfully.", 200);
    }

    public function force_delete_all_cashier()
    {

        // Staff::role('cashier')->onlyTrashed()->forceDelete();
        User::role('cashier')->onlyTrashed()->forceDelete();

        return response("Selected post(s) deleted successfully.", 200);
    }


    //Priceing
    public function pricing()
    {
        return view('staff.pages.manage_plans.index');
    }

    public function admin_washing_data()
    {
        return view('staff.pages.washing_data.index');
    }

    // Export & Import
    public function export_member_xlsx()
    {
        return Excel::download(new MemberExport, 'member.xlsx');
    }

    public function export_member_csv()
    {
        return Excel::download(new MemberExport, 'member.csv', \Maatwebsite\Excel\Excel::CSV, [
            'Content-Type' => 'text/csv',
        ]);
    }

    public function export_member_pdf()
    {
        return Excel::download(new MemberExport, 'member.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

    public function import_member_xlsx(Request $request)
    {
        Excel::import(new MemberImport, $request->file('file_member'));

        return redirect('/manage-member');
    }
}
