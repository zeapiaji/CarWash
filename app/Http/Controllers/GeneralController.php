<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GeneralController extends Controller
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

    public function register_member(Request $request)
    {
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'birth' => $request['birth'],
            'gender_id' => $request['gender'],
            'password' => Hash::make($request['password']),
        ]);

        $car = Car::create([
            'name' => $request['car'],
            'number_plate' => $request['number_plate'],
            'type_id' => $request['type'],
            'user_id' => $user->id,
        ]);

        $user->assignRole('member');

        return redirect('/home');
    }

    public function image(Request $request, $id)
    {
        $cover = $request -> cover;
        $coverName = 'user-'.$id.'.'.$cover->getClientOriginalExtension();
        request()->cover->move(public_path('/img/cover'), $coverName);

        $profile = $request -> profile;
        $profileName = 'user-'.$id.'.'.$profile->getClientOriginalExtension();
        request()->profile->move(public_path('/img/profile'), $profileName);

        return redirect()->back();
    }
}
