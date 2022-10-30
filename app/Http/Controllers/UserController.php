<?php

namespace App\Http\Controllers;

use App\Models\CarType;
use App\Models\Plans;
use App\Models\WashingPlans;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function landing_page()
    {
        $plans = Plans::all();

        return view('member.pages.index', compact('plans'));
    }
}
