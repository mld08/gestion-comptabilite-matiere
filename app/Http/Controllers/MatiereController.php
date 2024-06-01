<?php

namespace App\Http\Controllers;

use App\Exports\MatiereExport;
use App\Http\Requests\MatiereFormRequest;
use App\Models\Matiere;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('matiere.index', [
            'matieres'=> Matiere::orderBy('created_at', 'asc')->paginate(15),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matiere = new Matiere();
        return view('matiere.form', [
            'matiere'=> $matiere
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MatiereFormRequest $request)
    {
        $matiere = Matiere::create($request->validated());
        return redirect()->route('admin.matiere.index')->with('success','La matière a bien été créée.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Matiere $matiere)
    {
        return view('matiere.form', [
            'matiere'=> $matiere
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MatiereFormRequest $request, Matiere $matiere)
    {
        $matiere->update($request->validated());
        return redirect()->route('admin.matiere.index')->with('success','La matière a bien été modifiée.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matiere $matiere)
    {
        $matiere->delete();
        return redirect()->route('admin.matiere.index')->with('success','La matière a bien été supprimée.');
    }

    public function export() {
        return Excel::download(new MatiereExport, 'Journal des matières.xlsx');
    }
}
