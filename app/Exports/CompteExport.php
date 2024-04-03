<?php

namespace App\Exports;

use App\Models\Compte;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CompteExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('export.comptes-export', [
            'comptes' => Compte::all(),
        ]);
    }
}
