<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiel;
use App\Http\Requests\MaterielFormRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MaterielExport;


class MaterielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('materiel.index', [
            'materiels' => Materiel::orderBy('created_at', 'asc')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materiel = new Materiel();
        return view('materiel.form', [
            'materiel' => $materiel
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MaterielFormRequest $request)
    {
        $data = $request->validated();
        $materiel = Materiel::create($data);
        return to_route('admin.materiel.index')->with('success', 'Le matériel a bien été créé.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Materiel $materiel)
    {
        return view('materiel.form', [
            'materiel' => $materiel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MaterielFormRequest $request, Materiel $materiel)
    {
        $data = $request->validated();
        $materiel->update($data);
        return to_route('admin.materiel.index')->with('success', 'Le matériel a bien été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materiel $materiel)
    {
        $materiel->delete();
        return to_route('admin.materiel.index')->with('success', 'Le matériel a bien été supprimé.');
    }

    public function export()
    {
        return Excel::download(new MaterielExport, 'materiels_informatiques.xlsx');
    }
}
