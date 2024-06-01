<?php

namespace App\Http\Controllers;

use App\Exports\CompteExport;
use App\Http\Requests\CompteFormRequest;
use App\Models\Compte;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CompteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('compte.index', [
            'comptes' => Compte::orderBy('created_at','asc')->paginate(15),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compte = new Compte();
        return view('compte.form', [
            'compte'=> $compte
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompteFormRequest $request)
    {
        $compte = Compte::create($request->validated());
        return redirect()->route('admin.compte.index')->with('success','Le compte a bien été créé.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Compte $compte)
    {
        return view('compte.form', [
            'compte'=> $compte
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompteFormRequest $request, Compte $compte)
    {
        $compte->update($request->validated());
        return redirect()->route('admin.compte.index')->with('success','Le compte a bien été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compte $compte)
    {
        $compte->delete();
        return redirect()->route('admin.compte.index')->with('success','Le compte a bien été supprimé.');
    }

    public function export() {
        return  Excel::download(new CompteExport, 'Grand Livre des comptes.xlsx');
    }
}
