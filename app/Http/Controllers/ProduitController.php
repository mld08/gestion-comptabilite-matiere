<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Unite;
use App\Models\Categorie;
use App\Http\Requests\ProduitFormRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProduitExport;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produit.index', [
            'produits' => Produit::orderBy('created_at', 'asc')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie = Categorie::pluck('lib_categorie', 'id');
        $unite = Unite::pluck('lib_unite', 'id');
        $produit = new Produit();
        return view('produit.form', [
            'categorie' => $categorie,
            'unite' => $unite,
            'produit' => $produit
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProduitFormRequest $request)
    {
        $data = $request->validated();
        $data['unite_id'] = $data['unite_id'][0];
        $data['categorie_id'] = $data['categorie_id'][0];
        $produit = Produit::create($data);
        return to_route('admin.produit.index')->with('success', 'Le produit a bien été créé.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        return view('produit.form', [
            'produit' => $produit,
            'unite' => Unite::pluck('lib_unite', 'id'),
            'categorie' => Categorie::pluck('lib_categorie', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProduitFormRequest $request, Produit $produit)
    {
        $data = $request->validated();
        $data['unite_id'] = $data['unite_id'][0];
        $data['categorie_id'] = $data['categorie_id'][0];
        $produit->update($data);
        return to_route('admin.produit.index')->with('success', 'Le produit a bien été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return to_route('admin.produit.index')->with('success', 'Le produit a bien été supprimé.');
    }

    public function export()
    {
        return Excel::download(new ProduitExport, 'produits.xlsx');
    }
}
