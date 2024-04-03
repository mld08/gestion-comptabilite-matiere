<?php

namespace App\Exports;

use App\Models\Besoins;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class BesoinExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('export.besoins-export', [
            'besoins' => Besoins::all()
        ]);
    }
}
