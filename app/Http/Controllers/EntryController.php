<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function dashboard()
    {
        return view('staff.entry.index');
    }
}
