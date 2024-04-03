<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fournisseur;
use App\Http\Requests\FournisseurFormRequest;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('fournisseur.index', [
            'fournisseurs' => Fournisseur::orderBy('created_at', 'asc')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fournisseur = new Fournisseur();
        return view('fournisseur.form', [
            'fournisseur' => $fournisseur
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FournisseurFormRequest $request)
    {
        $fournisseur = Fournisseur::create($request->validated());
        return to_route('admin.fournisseur.index')->with('success', 'Le fournisseur a bien été créé');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fournisseur $fournisseur)
    {
        return view('fournisseur.form',[
            'fournisseur' => $fournisseur
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FournisseurFormRequest $request, Fournisseur $fournisseur)
    {
        $fournisseur->update($request->validated());
        return to_route('admin.fournisseur.index')->with('success', 'Le fournisseur a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fournisseur $fournisseur)
    {
        $fournisseur->delete();
        return redirect()->route('admin.fournisseur.index')
                         ->with('success','Le fournisseur a bien été supprimé');
    }
}
