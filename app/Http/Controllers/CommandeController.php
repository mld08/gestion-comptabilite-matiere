<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Produit;
use App\Models\Client;
use App\Http\Requests\CommandeFormRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CommandeExport;
class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('commande.index', [
            'commandes' => Commande::orderBy('created_at', 'asc')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produit = Produit::pluck('designation', 'id');
        $client = Client::pluck('prenom', 'id');
        $commande = new Commande();
        return view('commande.form', [
            'commande' => $commande,
            'client' => $client,
            'produit' => $produit
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommandeFormRequest $request)
    {
        $data = $request->validated();
        $commande = Commande::create($data);
        $commande->produits()->sync($request->validated('produits'));
        $commande->clients()->sync($request->validated('clients'));
        return to_route('admin.commande.index')->with('success', 'La commande a bien été créée.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Commande $commande)
    {
        return view('commande.form', [
            'commande' => $commande,
            'client' => Client::pluck('prenom', 'id'),
            'produit' => Produit::pluck('designation', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CommandeFormRequest $request, Commande $commande)
    {
        $data = $request->validated();
        $commande->produits()->sync($request->validated('produits'));
        $commande->clients()->sync($request->validated('clients'));
        $commande->update($data);
        return to_route('admin.commande.index')->with('success', 'La commande a bien été modifiée.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($commande)
    {
        $commande->delete();
        return to_route('admin.commande.index')->with('success', 'La commande a bien été supprimée.');
    }

    public function export()
    {
        return Excel::download(new CommandeExport, 'commandes.xlsx');
    }
}
