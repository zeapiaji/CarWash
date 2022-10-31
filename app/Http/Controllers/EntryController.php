<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Entry;
use App\Models\Plans;
use App\Models\Staff;
use App\Models\Doormeer;
use App\Models\Subsidiary;

use App\Models\Transaction;
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
        $subsidiaries = Subsidiary::all();
        $plans = Plans::all();

        return view('staff.pages.entry.entry_customer', compact('subsidiaries', 'plans'));
    }

    public function entry_customer_post(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $request->validate([
            'subsidiary' => 'required',
            'plan' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            try {
                Entry::create([
                    'user_id' => Auth::user()->id,
                    'status_id' => 1,
                    'plan_id' => $request->plan,
                    'subsidiary_id' => $request->subsidiary,
                ]);
            } catch (\Throwable $th) {
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

    public function entry_wash($id,$entryId)
    {
        Entry::where('user_id', $entryId)->update([
            'status_id' => 2
        ]);

        $doorsmeer = Doormeer::find($id);
        $doorsmeer->user_id = $entryId;
        $doorsmeer->save();

        return redirect()->back();
    }

    public function entry_wash_payment($id)
    {
        $doorsmeer = Doormeer::find($id);
        $entry = Entry::where('user_id', $doorsmeer->user_id)->first();

        return view('member.pages.invoice', compact('entry', 'doorsmeer'));
    }

    public function entry_wash_done($id)
    {
        $doorsmeer = Doormeer::find($id);

        $entry = Entry::where('user_id', $doorsmeer->user_id)->first();

        Transaction::create([
            'member_id' => $entry->user->id,
            'staff_id' => Auth::user()->staff->id,
            'plan_id' => $entry->plans->id,
            'doorsmeer_id' => $doorsmeer->id,
            'subsidiary_id' => $doorsmeer->subsidiary->id,
        ]);

        $entry->delete();

        $doorsmeer->user_id = null;
        $doorsmeer->save();

        Alert::success('Berhasil', 'Rekaman transaksi telah disimpan');
        return redirect('/entry/list');
    }

    public function entry_wash_cancel($id)
    {

        $doorsmeer = Doormeer::find($id);

        Entry::where('user_id', $doorsmeer->user_id)->update([
            'status_id' => 1
        ]);

        $doorsmeer->user_id = null;
        $doorsmeer->save();

        return redirect()->back();
    }

    public function entry_delete($id)
    {
        Entry::find($id)->delete();

        return redirect()->back();
    }
}
