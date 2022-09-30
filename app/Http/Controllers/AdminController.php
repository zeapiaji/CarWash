<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\Gender;
use App\Models\CarType;
use Illuminate\Http\Request;
use App\Exports\MemberExport;
use App\Imports\MemberImport;
use App\Models\Gender;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('staff.pages.dashboard');
    }

    public function manage_employee()
    {
        $data = User::role('employee')->get();

        return view('staff.pages.manage_employee.index', compact('data'));
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

        return view('staff.pages.manage_member.detailmember', compact('data'));
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
    public function input_employee()
    {
        $gender = Gender::all();
        return view('staff.admin.pages.manage_employee.input', compact('gender'));
    }
    public function store_employee(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'gender' => 'required'
        ]);
        user::role('employee')->create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'gender_id' => $request->gender
        ]);
        return redirect('/manage-employee');
    }
    public function edit_employee($id)
    {
        $data = User::find($id);
        $gender = Gender::all();
        return view('staff.admin.pages.manage_employee.edit', compact('data', 'gender'));
    }
    public function update_employee(Request $request)
    {
        $data = User::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->gender_id = $request->gender;
        $data->save();
        return redirect('/manage-employee');
    }

    // Soft Delete
    public function delete_employee($id)
    {
        User::find($id)->delete();

        return redirect('/manage-employee');
    }

    public function multiple_delete_employee(Request $request)
    {
        User::whereIn('id', $request->get('selected'))->delete();

        return response("Selected post(s) deleted successfully.", 200);
    }

    public function recycle_employee()
    {
        $data = User::onlyTrashed()->get();
        return view('staff.admin.pages.manage_employee.recovery', compact('data'));
    }

    public function recovery_employee($id)
    {
        // User::withTrashed()->where('id', $id)->restore();
        $data = User::role('employee')->withTrashed()->where('id', $id)->restore();

        return redirect('/recycle/employe');
    }

    public function multiple_recovery_employee(Request $request)
    {
        User::whereIn('id', $request->get('selected'))
            ->restore();

        $data = User::role('employee')->whereIn('id', $request->get('selected'));

        return response("Selected post(s) deleted successfully.", 200);
    }

    public function recovery_all_employee()
    {
        User::role('employee')->withTrashed()->restore();

        return response("Selected post(s) deleted successfully.", 200);
    }

    public function forcedelete_employee($id)
    {
        User::role('employee')->withTrashed()->where('id', $id)->forceDelete();

        return redirect('/recycle/employe');
    }

    public function multiple_force_delete_employee(Request $request)
    {
        // Car::whereIn('user_id', $request->get('selected'))
        //     ->forceDelete();
        User::role('employee')->whereIn('id', $request->get('selected'))
            ->forceDelete();

        return response("Selected post(s) deleted successfully.", 200);
    }

    public function force_delete_all_employee()
    {

        User::role('employee')->onlyTrashed()->forceDelete();

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
