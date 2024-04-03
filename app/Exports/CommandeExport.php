<?php

namespace App\Exports;

use App\Models\Commande;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CommandeExport implements FromView
{
    public function view(): View
{
    return view('export.commandes-export', [
        'commandes' => Commande::all()
    ]);
}

}
