<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class EntryController extends Controller
{
    public function dashboard()
    {
        return view('staff.pages.entry.index');
    }

    public function entry_customer()
    {
        return view('staff.pages.entry.entry_customer');
    }

    public function entry_customer_post(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $user = User::where('email', $request->email)->first()->id;

            try {
                Entry::create([
                    'user_id' => $user,
                    'status_id' => 1,
                ]);
            } catch (\Throwable $th) {
                Auth::logout();

                return back()->withErrors([
                    'email' => 'Anda sudah dalam antrian.',
                ]);
            }

            Auth::logout();
            return back();
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
