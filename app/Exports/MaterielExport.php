<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Materiel;
use Illuminate\Contracts\View\View;

class MaterielExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('export.materiels-export', [
            'materiels' => Materiel::all()
        ]);
    }
}
