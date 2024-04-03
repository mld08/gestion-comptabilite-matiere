<?php

namespace App\Exports;
use App\Models\Carburant;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CarburantExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('export.carburants-export', [
            'carburants' => Carburant::all()
        ]);
    }
}
