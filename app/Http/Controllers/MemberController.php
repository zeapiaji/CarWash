<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\Entry;
use App\Models\Gender;
use App\Models\CarType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
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

    public function member_home()
    {
        $member = User::find(Auth::user()->id);
        $onDoorsmeer = Entry::where('status_id', 2)->where('user_id', Auth::user()->id)->first();
        return view('member.pages.home', compact('onDoorsmeer', 'member'));
    }

    public function edit_car_member()
    {
        $carType = CarType::all();
        return view('member.pages.edit_car', compact('carType'));
    }

    public function update_car_member(Request $request)
    {
        $member = Car::where('user_id', Auth::id())->update([
            'name' => $request->car,
            'type_id' => $request->type,
            'number_plate' => $request->number_plate,
        ]);

        return redirect('/member-home');
    }

    public function update_member(Request $request)
    {
        $member = User::find(Auth::id());
        $member->name = $request->name;
        $member->email = $request->email;
        $member->phone = $request->phone;
        $member->address = $request->address;
        $member->birth = $request->birth;
        $member->gender_id = $request->gender;
        $member->save();

        return redirect('/member-home');
    }

    public function edit_member()
    {
        $gender = Gender::all();

        return view('member.pages.edit', compact('gender'));
    }

    public function delete_member()
    {
        User::find(Auth::id())->forceDelete();

        return view('member.pages.edit');
    }
}
