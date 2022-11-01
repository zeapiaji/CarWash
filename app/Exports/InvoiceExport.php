<?php

namespace App\Exports;


use App\Models\Entry;
use App\Models\Doormeer;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class InvoiceExport implements FromView
{
    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $doorsmeer = Doormeer::find($this->id);

        $entry = Entry::where('user_id', $doorsmeer->user_id)->first();

        return view('member.pages.invoice', compact('entry', 'doorsmeer'));
    }
}
