<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Entry;
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
}
