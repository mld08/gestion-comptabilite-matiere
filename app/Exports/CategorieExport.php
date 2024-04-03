<?php

namespace App\Exports;
use App\Models\Categorie;
use Illuminate\Contracts\View\View;

use Maatwebsite\Excel\Concerns\FromView;

class CategorieExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('export.categories-export', [
            'categories' => Categorie::all()
        ]);
    }
}
