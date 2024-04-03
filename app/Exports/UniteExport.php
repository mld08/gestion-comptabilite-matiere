<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Unite;
use Illuminate\Contracts\View\View;


class UniteExport implements FromView
{
    public function view(): View
    {
        return view('export.unites-export', [
            'unites' => Unite::all()
        ]);
    }
}
