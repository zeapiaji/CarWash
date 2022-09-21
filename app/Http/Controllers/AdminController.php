<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('staff.admin.pages.dashboard');
    }

    public function manage_employee()
    {
        return view('staff.admin.pages.manage_employee.index');
    }

    // Member
    public function manage_member()
    {
        $data = User::role('user')->get();

        return view('staff.admin.pages.manage_member.index', compact('data'));
    }

        // Edit
        public function edit_member($id)
        {
            $data = User::find($id);

            return view('staff.admin.pages.manage_member.edit', compact('data'));
        }

        public function update_member(Request $request)
        {
            $data = User::find($request->id);

            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->save();

            $car = Car::find($request->id);
            $car->name = $request->car;
            $car->type = $request->type;
            $car->number_plate = $request->number_plate;
            $car->save();

            return redirect('/manage-member');
        }

    public function delete_member($id)
    {
        $data = User::find($id)->delete();

        return redirect('/manage-member');
    }

    public function pricing()
    {
        return view('staff.admin.pages.manage_price.index');
    }

    public function admin_washing_data()
    {
        return view('staff.admin.pages.washing_data.index');
    }
}
