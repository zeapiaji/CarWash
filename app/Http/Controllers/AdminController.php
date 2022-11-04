<?php

namespace App\Http\Controllers;


use App\Models\Car;
use App\Models\User;
use App\Models\Staff;
use App\Models\Gender;
use App\Models\CarType;
use App\Models\Doormeer;
use App\Models\Subsidiary;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Exports\MemberExport;
use App\Imports\MemberImport;
use App\Exports\CashierExport;
use App\Exports\TransactionExport;
use App\Http\Requests\adminRequest;
use App\Http\Requests\memberRequest;
use Database\Seeders\DoormeerSeeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\cashierRequest;
use App\Http\Requests\doorsmeerRequest;
use Spatie\Permission\Contracts\Role;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role as ModelsRole;
use Barryvdh\DomPDF\Facade\Pdf;





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

    public function dashboard_table()
    {

        $admin = Auth::user()->staff;
        $data = Staff::where('subsidiary_id', $admin->subsidiary_id)
            ->whereNotIn('user_id', [$admin->user_id])
            ->get();

        $doorsmeer = Doormeer::where('subsidiary_id', $admin->subsidiary_id)->get();
        $history = Doormeer::where('subsidiary_id', $admin->subsidiary_id)->get();
        // dd($history);
        $transaction = Transaction::where('subsidiary_id', $admin->subsidiary_id)->get();

        return view('staff.pages.dashboard_admin.dashboard', compact('data', 'doorsmeer', 'history', 'transaction'));
    }


    public function manage_cashier()
    {
        $staff = User::find(Auth::user()->id);
        if ($staff->hasRole('super_admin')) {
            $admin = User::select('id')->role('admin')->get();
            $data = Staff::whereNotIn('user_id', $admin)->get();

            return view('staff.pages.manage_cashier.index', compact('data'));
        } elseif ($staff->hasRole('admin')) {
            $subs = Auth::user()->staff;
            $data = User::role('cashier')->get();
            $data = Staff::where('subsidiary_id', $subs->subsidiary_id)
                ->whereNotIn('user_id', [$subs->user_id])
                ->get();

            $gender = Gender::all();

            return view('staff.pages.manage_cashier.index', compact('data'));
        }
    }


    // Member
    public function manage_member()
    {
        $data = User::role('member')->get();
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
        toast('Member berhasil diubah!', 'success');

        return redirect('/manage-member');
    }


    public function delete_admin($id)
    {
        User::find($id)->delete();
        Car::where('user_id', $id)->delete();

        toast('Data dipindahkan ke sampah');

        return redirect('/manage-admin');
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

    public function force_delete_all_admin()
    {
        Car::onlyTrashed()->forceDelete();
        User::onlyTrashed()->forceDelete();

        return response("Data yang dipilih berhasil dihapus!", 200);
    }


    // Soft Delete
    public function delete_member($id)
    {
        $role = Auth::user();
        $user = User::find($id);
        if ($role->hasRole('member')) {
            Car::where('user_id', $id)->delete();
            Auth::logout();
            $user->delete();

            toast('Akun anda berhasil dihapus!', 'info');

        return redirect('/manage-member');
        } elseif($role->hasRole('super_admin')) {
            Car::where('user_id', $id)->delete();
            $user->delete();
        }

        toast('Data dipindahkan ke sampah', 'success');

        return redirect('/manage-member');
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

    public function recovery_all_member()
    {
        User::withTrashed()->restore();
        Car::withTrashed()->restore();

        toast('Semua Member berhasil dipulihkan!', 'success');
        return redirect('/manage-member');
    }

    public function forcedelete_member($id)
    {
        Car::withTrashed()->where('id', $id)->forceDelete();
        User::withTrashed()->where('id', $id)->forceDelete();

        return redirect('/recycle-member');
    }

    public function force_delete_all_member()
    {
        Car::onlyTrashed()->forceDelete();
        User::onlyTrashed()->forceDelete();

        toast('Semua Member berhasil dihapus permanen!', 'info');
        return redirect('/manage-member');
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
        $gender = Gender::all();
        $subsidiaries = Subsidiary::all();

        return view('staff.pages.manage_cashier.input', compact('gender', 'gender', 'subsidiaries'));
    }


    public function store_cashier(cashierRequest $request)
    {
        $role = Auth::user();
        $user = User::create([
            'name'        => $request->name,
            'email'       => $request->email,
            'password'    => Hash::make($request['password']),
            'phone'       => $request->phone,
            'birth'       => $request->birth,
            'address'     => $request->address,
            'gender_id'   => $request->gender,
        ])->assignRole('cashier');
        if ($role->hasRole('admin')) {
        Staff::create([
            'user_id' => $user->id,
            'subsidiary_id' => Auth::user()->staff->subsidiary_id,
        ]);
        } elseif ($role->hasRole('super_admin')) {
            Staff::create([
                'user_id' => $user->id,
                'subsidiary_id' => $request->subsidiary,
            ]);
        }

        toast('Kasir '.$user->name.' berhasil ditambahkan!', 'success');
        return redirect('/manage-cashier');
    }


    public function edit_cashier($id)
    {
        $data = User::find($id);
        $role = ModelsRole::whereNotIn('name', ['member', 'super_admin', 'ceo'])->get();

        $gender = Gender::all();
        $selectedRole = $data->roles->first()->id;

        $subsidiary = Subsidiary::all();

        return view('staff.pages.manage_cashier.edit', compact('data', 'gender', 'role', 'selectedRole', 'subsidiary'));
    }

    public function update_cashier(adminRequest $request, $id)
    {
        $data = User::find($request->id);
        $role = $data;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->birth = $request->birth;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->gender_id = $request->gender;
        $data->save();

        Staff::where('user_id', $id)->update([
            'subsidiary_id' => $request->subsidiary
        ]);

        User::find($id)->syncRoles($request->role);
        toast('Data '.$role->name.' telah diubah');

        return redirect('/manage-cashier');
    }

    // Soft Delete
    public function delete_cashier($id)
    {
        $staff = User::find($id);
        Staff::where('user_id', $id)->delete();

        toast('Data '. $staff->name .' dipindahkan ke sampah!', 'info');
        return redirect('/manage-cashier');
    }

    public function recycle_cashier()
    {
        $admin = Auth::user();
        if ($admin->hasRole('admin')) {
            $data = Staff::where('subsidiary_id', $admin->staff->subsidiary_id)->onlyTrashed()->get();
        }elseif ($admin->hasRole('super_admin')) {
            $data = Staff::onlyTrashed()->get();
        }

        return view('staff.pages.manage_cashier.recovery', compact('data'));
    }

    public function recovery_cashier($id)
    {
        $staff = User::find($id);
        Staff::withTrashed()->where('user_id', $id)->restore();

        toast('Data '. $staff->name .' berhasil dipulihkan!', 'success');
        return redirect()->back();
    }

    public function recovery_all_cashier()
    {
        $role = Auth::user();
        if ($role->hasRole('admin')) {
            Staff::where('subsidiary_id', Auth::user()->staff->subsidiary_id)->withTrashed()->restore();
        }elseif ($role->hasRole('super_admin')) {
            Staff::withTrashed()->restore();
        }

        toast('Semua Kasir berhasil dipulihkan!', 'success');
        return redirect('/manage-cashier');
    }

    public function forcedelete_cashier($id)
    {
        $user = User::find($id);
        Staff::withTrashed()->where('user_id', $id)->forceDelete();
        User::find($id)->forceDelete();

        toast('Kasir '.$user->name.' berhasil dihapus permanen!', 'info');
        return redirect('/recycle-cashier');
    }

    public function force_delete_all_cashier()
    {
        $role = Auth::user();
        if ($role->hasRole('admin')) {
            Staff::onlyTrashed()->where('subsidiary_id', Auth::user()->staff->subsidiary_id)->forceDelete();
        }elseif ($role->hasRole('super_admin')) {
            Staff::onlyTrashed()->forceDelete();
        }

        toast('Semua Kasir berhasil dihapus permanen!');
        return redirect('/manage-cashier');
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

    public function export_cashier_xlsx()
    {
        $auth = Auth::user();
        if ($auth->hasRole('admin')) {
            return Excel::download(new CashierExport, 'kasir-cabang-'.Auth::user()->staff->subsidiary->name.'.xlsx');
        }elseif ($auth->hasRole('super_admin')) {
            return Excel::download(new CashierExport, 'kasir.xlsx');
        }

    }

    public function export_cashier_csv()
    {
        $auth = Auth::user();
        if ($auth->hasRole('admin')) {
            return Excel::download(new CashierExport, 'kasir-cabang-'.Auth::user()->staff->subsidiary->name.'.csv', \Maatwebsite\Excel\Excel::CSV, [
                'Content-Type' => 'text/csv',
            ]);
        }elseif ($auth->hasRole('super_admin')) {
            return Excel::download(new CashierExport, 'kasir.csv', \Maatwebsite\Excel\Excel::CSV, [
                'Content-Type' => 'text/csv',
            ]);
        }
    }

    public function export_cashier_pdf()
    {
        $auth = Auth::user();
        if ($auth->hasRole('admin')) {
            return Excel::download(new CashierExport, 'kasir-cabang-'.Auth::user()->staff->subsidiary->name.'.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
        }elseif ($auth->hasRole('super_admin')) {
            return Excel::download(new CashierExport, 'kasir.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
        }
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

    public function update_doorsmeer(doorsmeerRequest $request, $id)
    {
        $data = Doormeer::find($id);
        $beforeChange = Doormeer::find($id);
        $data->name = $request->name;
        $data->save();
        toast('Doorsmeer '. $beforeChange->name.' telah diubah menjadi '. $data->name.'!');

        return redirect('/doorsmeer/');
    }

    public function delete_doorsmeer($id)
    {
        $doorsmeer = Doormeer::find($id);
        try {
            $doorsmeer->delete();
        } catch (\Throwable $th) {
            return 'Keluarkan terlebih dahulu member dari doorsmeer!';
        }
        toast('Doorsmeer '. $doorsmeer->name.' telah dihapus!');
        return redirect('/doorsmeer/');
    }

    public function add_doorsmeer()
    {
        return view('staff.pages.manage_doorsmeer.add');
    }

    public function store_doorsmeer(doorsmeerRequest $request)
    {
        $admin = Staff::where('user_id', Auth::user()->id)->first();
        $doorsmeer = Doormeer::create([
            'name' => $request->name,
            'subsidiary_id' => $admin->subsidiary_id,
        ]);
        toast('Doorsmeer '.$doorsmeer->name.' telah ditambahkan!');

        return redirect('/doorsmeer/');
    }

    /**
     * Transaction
     *
     */
    public function history_transaction($id)
    {
        $transaction = Transaction::find($id);

        return view('member.pages.history_invoices', compact('transaction'));
    }

    public function history_member()
    {
        $transaction = Transaction::where('member_id', Auth::id())->get();

        return view('member.pages.history', compact('transaction'));
    }

    public function transaction_download($id)
    {
        $data = Transaction::find($id);
        $transaction = ['transaction' => $data];
        $pdf = Pdf::loadView('staff.pages.transaction.export', $transaction);
        return $pdf->stream();

    }

}
