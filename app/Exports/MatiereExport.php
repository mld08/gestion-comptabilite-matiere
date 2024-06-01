<?php

namespace App\Exports;

use App\Models\Matiere;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class MatiereExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view() : View
    {
        return view('export.matieres-export', [
            'matieres' => Matiere::all(),
        ]);
    }
}
