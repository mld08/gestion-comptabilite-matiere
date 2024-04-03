<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Client;
use Illuminate\Contracts\View\View;

class ClientExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('export.clients-export', [
            'clients' => Client::all()
        ]);
    }
}
