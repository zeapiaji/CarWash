<?php

namespace App\Exports;

use App\Invoice;
use App\Models\Transaction;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TransactionExport implements FromView
{

    protected $id;

    function __construct($id) {
        $this->id = $id;
    }

    public function view(): View
    {
        return view('staff.pages.transaction.export', [
            'transaction' => Transaction::find($this->id)
        ]);
    }
}
