<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Http\Requests\CategorieFormRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CategorieExport;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categorie.index', [
            'categories' => Categorie::orderBy('created_at', 'asc')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie = new Categorie();
        return view('categorie.form', [
            'categorie' => $categorie
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorieFormRequest $request)
    {
        $categorie = Categorie::create($request->validated());
        return to_route('admin.categorie.index')->with('success', 'La categorie a bien été créée');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        return view('categorie.form', [
            'categorie' => $categorie
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategorieFormRequest $request, Categorie $categorie)
    {
        $categorie->update($request->validated());
        return to_route('admin.categorie.index')->with('success', 'La categorie a bien été modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->route('admin.categorie.index')
                         ->with('success','La categorie a bien été supprimée');
    }

    public function export()
    {
        return Excel::download(new CategorieExport, 'categories.xlsx');
    }
}
