<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Produit;
use Illuminate\Contracts\View\View;

class ProduitExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('export.produits-export', [
            'produits' => Produit::all()
        ]);
    }
}
