<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CeoController extends Controller
{
    public function dashboard()
    {
        return view('staff.ceo.pages.dashboard');
    }
}
