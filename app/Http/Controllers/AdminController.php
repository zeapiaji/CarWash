<?php

namespace App\Http\Controllers;


use App\Models\Car;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Staff;
use App\Models\Gender;
use App\Models\CarType;
use App\Exports\MemberExport;
use App\Exports\CashierExport;
use App\Http\Requests\cashierRequest;
use App\Http\Requests\memberRequest;
use App\Imports\MemberImport;
use App\Models\Doormeer;
use App\Models\Subsidiary;
use Database\Seeders\DoormeerSeeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role as ModelsRole;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Contracts\Role;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;





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

        $admin = Auth::user()->staff;
        $data = Staff::where('subsidiary_id', $admin->subsidiary_id)
            ->whereNotIn('user_id', [$admin->user_id])
            ->get();

        $doorsmeer = Doormeer::where('subsidiary_id', $admin)->get();

        return view('staff.pages.dashboard_admin.dashboard', compact('data', 'doorsmeer'));
    }

    public function manage_cashier()
    {
        $staff = User::find(Auth::user()->id);
        if ($staff->hasRole('super_admin')) {
            $data = Staff::all();

            return view('staff.pages.
            manage_cashier.index', compact('data'));
        } elseif ($staff->hasRole('admin')) {
            $subs = Auth::user()->staff;
            $data = User::role('cashier')->get();
            $data = Staff::where('subsidiary_id', $subs->subsidiary_id)
                ->whereNotIn('user_id', [$subs->user_id])
                ->get();

            $gender = Gender::all();
            // example:


            return view('staff.pages.manage_cashier.index', compact('data'));
        }
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
        $data = User::find($id)->first();
        // dd($data);
        $car_type = CarType::all();
        $gender = Gender::all();
        return view('staff.pages.manage_member.edit', compact('data', 'car_type', 'gender'));
    }

    public function update_member(memberRequest $request)
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
        Alert::success('Berhasil', 'data member telah diubah    ');

        return redirect('/manage-member');
    }


    public function delete_admin($id)
    {
        User::find($id)->delete();
        Car::where('user_id', $id)->delete();

        Alert::info('Berhasil', 'Data dipindahkan ke sampah');

        return redirect('/manage-admin');
    }

    public function multiple_delete_admin(Request $request)
    {
        Car::whereIn('user_id', $request->get('selected'))->delete();
        User::whereIn('id', $request->get('selected'))->delete();

        return response("Data yang dipilih berhasil dihapus!", 200);
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

        return response("Data yang dipilih berhasil dihapus!", 200);
    }

    public function recovery_all_admin()
    {
        User::withTrashed()->restore();
        Car::withTrashed()->restore();

        return response("Data yang dipilih berhasil dihapus!", 200);
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

        return response("Data yang dipilih berhasil dihapus!", 200);
    }

    public function force_delete_all_admin()
    {
        Car::onlyTrashed()->forceDelete();
        User::onlyTrashed()->forceDelete();

        return response("Data yang dipilih berhasil dihapus!", 200);
    }


    // Soft Delete
    public function delete_member($id)
    {
        User::find($id)->delete();
        Car::where('user_id', $id)->delete();

        Alert::info('Berhasil', 'Data dipindahkan ke sampah');

        return redirect('/manage-member');
    }

    public function multiple_delete_member(Request $request)
    {
        Car::whereIn('user_id', $request->get('selected'))->delete();
        User::whereIn('id', $request->get('selected'))->delete();

        return response("Data yang dipilih berhasil dihapus!", 200);
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

        return response("Data yang dipilih berhasil dihapus!", 200);
    }

    public function recovery_all_member()
    {
        User::withTrashed()->restore();
        Car::withTrashed()->restore();

        return response("Data yang dipilih berhasil dihapus!", 200);
    }

    public function forcedelete_member($id)
    {
        Car::withTrashed()->where('id', $id)->forceDelete();
        User::withTrashed()->where('id', $id)->forceDelete();

        return redirect('/recycle-member');
    }

    public function multiple_force_delete_member(Request $request)
    {
        Car::whereIn('user_id', $request->get('selected'))
            ->forceDelete();
        User::whereIn('id', $request->get('selected'))
            ->forceDelete();

        return response("Data yang dipilih berhasil dihapus!", 200);
    }

    public function force_delete_all_member()
    {
        Car::onlyTrashed()->forceDelete();
        User::onlyTrashed()->forceDelete();

        return response("Data yang dipilih berhasil dihapus!", 200);
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


    public function store_cashier(cashierRequest $request)
    {
        $user = User::create([

            'name'        => $request->name,
            'email'       => $request->email,
            'password' => Hash::make($request['password']),
            'phone'       => $request->phone,
            'birth'       => $request->birth,
            'address'     => $request->address,
            'gender_id'   => $request->gender,
        ])->assignRole('cashier');
        Staff::create([
            'user_id' => $user->id,
            'subsidiary_id' => $request->subsidiary,
        ]);

        Alert::success('Berhasil', 'Kasir telah ditambahkan');
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
        $data->birth = $request->birth;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->gender_id = $request->gender;
        $data->save();

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:25',
            'email' => 'required|unique:users,email',
            'phone' => 'required|unique:users,phone|min:10|max:13',
            'birth' => 'required',
            'address' => 'required|min:5|max:100',
            'gender' => 'required',
            'subsidiary' => 'required',

        ]);


        Staff::where('user_id', $id)->first()->syncRoles($request->role);

        // alert::toast('success');
        Alert::success('Berhasil', 'Data kasir telah diubah');


        return redirect('/manage-cashier');
    }

    // Soft Delete
    public function delete_cashier($id)
    {
        Staff::where('user_id', $id)->delete();

        Alert::info('Berhasil', 'Data dipindahkan ke sampah');


        return redirect('/manage-cashier');
    }

    public function multiple_delete_cashier(Request $request)
    {
        Staff::role('cashier')->whereIn('id', $request->get('selected'))->delete();
        User::role('cashier')->whereIn('id', $request->get('selected'))->delete();

        return response("Data yang dipilih berhasil dihapus!.", 200);
    }

    public function recycle_cashier()
    {
        $admin = Auth::user();
        $data = Staff::where('subsidiary_id', $admin->staff->subsidiary_id)->onlyTrashed()->get();

        return view('staff.pages.manage_cashier.recovery', compact('data'));
    }

    public function recovery_cashier($id)
    {
        Staff::withTrashed()->where('user_id', $id)->restore();

        return redirect()->back();
    }

    public function multiple_recovery_cashier(Request $request)
    {
        Staff::whereIn('id', $request->get('selected'))
            ->restore();

        return response("Data yang dipilih berhasil dihapus!", 200);
    }

    public function recovery_all_cashier()
    {
        Staff::where('subsidiary_id', Auth::user()->staff->subsidiary_id)->withTrashed()->restore();

        return response("Data yang dipilih berhasil dihapus!", 200);
    }

    public function forcedelete_cashier($id)
    {
        Staff::withTrashed()->where('user_id', $id)->forceDelete();
        User::find($id)->forceDelete();

        return redirect('/recycle-cashier');
    }

    public function multiple_force_delete_cashier(Request $request)
    {
        Staff::whereIn('user_id', $request->get('selected'))
            ->forceDelete();
        User::role('cashier')->whereIn('id', $request->get('selected'))
            ->forceDelete();

        return response("Data yang dipilih berhasil dihapus!", 200);
    }

    public function force_delete_all_cashier()
    {
        $cashier = Staff::where('subsidiary_id', Auth::user()->staff->subsidiary_id)->get();
        Staff::onlyTrashed()->where('subsidiary_id', Auth::user()->staff->subsidiary_id)->forceDelete();

        return response("Data yang dipilih berhasil dihapus!", 200);
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


    /**
     * Doorsmeer
     */
    public function manage_doorsmeer()
    {
        $admin = Staff::where('user_id', Auth::user()->id)->first()->subsidiary_id;
        $doorsmeer = Doormeer::where('subsidiary_id', $admin)->get();

        return view('staff.pages.manage_doorsmeer.index', compact('doorsmeer'));
    }

    public function edit_doorsmeer($id)
    {
        $data = Doormeer::find($id);

        return view('staff.pages.manage_doorsmeer.edit', compact('data'));
    }

    public function update_doorsmeer(Request $request, $id)
    {
        $data = Doormeer::find($id);
        $data->name = $request->name;
        $data->save();
        Alert::success('Berhasil', 'Doorsmeer telah diubah');
        return redirect('/doorsmeer/');
    }

    public function delete_doorsmeer($id)
    {
        try {
            Doormeer::find($id)->delete();
        } catch (\Throwable $th) {
            return 'Keluarkan terlebih dahulu member dari doorsmeer!';
        }
        Alert::info('Berhasil', 'Data dipindahkan ke sampah');
        return redirect('/doorsmeer/');
    }

    public function add_doorsmeer()
    {
        return view('staff.pages.manage_doorsmeer.add');
    }

    public function store_doorsmeer(Request $request)
    {
        $admin = Staff::where('user_id', Auth::user()->id)->first();
        Doormeer::create([
            'name' => $request->name,
            'subsidiary_id' => $admin->subsidiary_id,
        ]);
        Alert::success('Berhasil', 'Doorsmeer telah ditambahkan');

        return redirect('/doorsmeer/');
    }

    public function multiple_delete_doorsmeer(Request $request)
    {
        Doormeer::whereIn('id', $request->get('selected'))->delete();

        return response("Data yang dipilih berhasil dihapus!", 200);
    }
}
